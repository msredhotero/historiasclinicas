select 
    fix.nombre,
    fix.partidos,
    fix.ganados,
    fix.empatados,
    fix.perdidos,
    fix.golesafavor,
    (case
        when rr.idreemplazo is null then fix.golesencontra + COALESCE(rrr.golesencontra, 0)
        else fix.golesencontra + rr.golesencontra
    end) as golesencontra,
    fix.golesafavor - (case
        when rr.idreemplazo is null then fix.golesencontra + COALESCE(rrr.golesencontra, 0)
        else fix.golesencontra + rr.golesencontra
    end) as diferencia,
    ((case
        when rr.idreemplazo is null then fix.pts + COALESCE(rrr.puntos, 0)
        else fix.pts + rr.puntos
    end) - COALESCE((case
                when fix.puntos >= 15 and fix.puntos < 20 then 1
                when fix.puntos >= 20 and fix.puntos < 25 then 2
                when fix.puntos >= 25 then 3
            end),
            0))+ fix.bonus   as pts,
    fix.idequipo,
    fix.puntos,
    fix.equipoactivo,
    cast((fix.golesafavor / fix.partidos) as decimal (4 , 2 )) as porcentajegoles,
    round((fix.pts * 100) / (fix.partidos * 3)) as efectividad,
    (select 
            count(*)
        from
            tbsuspendidos
        where
            refequipo = fix.idequipo
                and (motivos = 'Roja Directa'
                or motivos = 'Doble Amarilla')) as rojas,
    (select 
            sum(amarillas)
        from
            tbamonestados
        where
            refequipo = fix.idequipo
                and amarillas <> 2) as amarillas,
    (case
        when rr.idreemplazo is null then 0
        else 1
    end) as reemplzado,
    (case
        when rrr.idreemplazo is null then 0
        else 1
    end) as volvio,
	fix.bonus
from
    (select 
        r.nombre,
            count(*) as partidos,
            sum(case
                when r.resultado_a > r.resultado_b then 1
                else 0
            end) as ganados,
            sum(case
                when r.resultado_a = r.resultado_b then 1
                else 0
            end) as empatados,
            sum(case
                when r.resultado_a < r.resultado_b then 1
                else 0
            end) as perdidos,
            sum(r.resultado_a) as golesafavor,
            sum(r.resultado_b) as golesencontra,
            (sum(r.resultado_a) - sum(r.resultado_b)) as diferencia,
            ((sum(case
                when r.resultado_a > r.resultado_b then 1
                else 0
            end) * 2) + (sum(case
                when r.resultado_a = r.resultado_b then 1
                else 0
            end) * 1)) as pts,
            r.idequipo,
            fp.puntos,
            (case
                when r.equipoactivo = 0 then false
                else true
            end) as equipoactivo,
            r.idtorneo
			,sum(r.bonus) as bonus
    from
        (SELECT 
        e.idequipo,
            e.nombre,
            t.activo,
            t.idtorneo,
            f.tipofecha,
            fi.hora,
            (case
                when
                    fi.resultado_a is null
                then
                    (select 
                            (case
                                    when
                                        sum(gg.goles) is null
                                    then
                                        (case
                                            when fi.chequeado = 1 then 0
                                            else null
                                        end)
                                    else sum(gg.goles) - (select 
                                            coalesce(sum(aaa.arquero), 0)
                                        from
                                            tbamonestados aaa
                                        where
                                            aaa.reffixture = fi.idfixture
                                                and aaa.refequipo = (select 
                                                    tge.refequipo
                                                from
                                                    dbtorneoge tge
                                                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                                                    and t.activo = true
                                                inner join dbequipos e ON e.idequipo = tge.refequipo
                                                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                                                where
                                                    tge.idtorneoge = fi.reftorneoge_a))
                                end)
                        from
                            tbgoleadores gg
                        where
                            gg.reffixture = fi.idfixture
                                and gg.refequipo = (select 
                                    tge.refequipo
                                from
                                    dbtorneoge tge
                                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                                    and t.activo = true
                                inner join dbequipos e ON e.idequipo = tge.refequipo
                                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                                where
                                    tge.idtorneoge = fi.reftorneoge_a))
                else fi.resultado_a
            end) as resultado_a,
            (case
                when
                    fi.resultado_b is null
                then
                    (select 
                            (case
                                    when
                                        sum(gg.goles) is null
                                    then
                                        (case
                                            when fi.chequeado = 1 then 0
                                            else null
                                        end)
                                    else sum(gg.goles) - (select 
                                            coalesce(sum(aaa.arquero), 0)
                                        from
                                            tbamonestados aaa
                                        where
                                            aaa.reffixture = fi.idfixture
                                                and aaa.refequipo = (select 
                                                    tge.refequipo
                                                from
                                                    dbtorneoge tge
                                                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                                                    and t.activo = true
                                                inner join dbequipos e ON e.idequipo = tge.refequipo
                                                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                                                where
                                                    tge.idtorneoge = fi.reftorneoge_b))
                                end)
                        from
                            tbgoleadores gg
                        where
                            gg.reffixture = fi.idfixture
                                and gg.refequipo = (select 
                                    tge.refequipo
                                from
                                    dbtorneoge tge
                                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                                    and t.activo = true
                                inner join dbequipos e ON e.idequipo = tge.refequipo
                                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                                where
                                    tge.idtorneoge = fi.reftorneoge_b))
                else fi.resultado_b
            end) as resultado_b,
            fi.reffecha,
            tge.refgrupo,
            tge.activo as equipoactivo,
			pe.puntos as bonus
    FROM
        dbtorneoge tge
    Inner Join dbequipos e ON tge.refequipo = e.idequipo
    inner join dbgrupos g ON tge.refgrupo = g.idgrupo
    Inner Join dbtorneos t ON t.idtorneo = tge.reftorneo
    Inner Join dbfixture fi ON tge.idtorneoge = fi.reftorneoge_a
    inner join tbtipotorneo tp ON tp.idtipotorneo = t.reftipotorneo
    inner join tbfechas f ON fi.refFecha = f.idfecha
	inner join tbpuntosequipos pe on pe.refequipo = e.idequipo and pe.reffixture = fi.idfixture 
    where
        tge.refgrupo = 19
            and tp.idtipotorneo = 1
            and fi.reffecha <= 23
            and t.activo = 1 UNION all SELECT 
        e.idequipo,
            e.nombre,
            t.activo,
            t.idtorneo,
            f.tipofecha,
            fi.hora,
            (case
                when
                    fi.resultado_b is null
                then
                    (select 
                            (case
                                    when
                                        sum(gg.goles) is null
                                    then
                                        (case
                                            when fi.chequeado = 1 then 0
                                            else null
                                        end)
                                    else sum(gg.goles)- (select coalesce(sum(aaa.arquero),0) from tbamonestados aaa where aaa.reffixture = fi.idfixture
																														and aaa.refequipo = (select 
																															tge.refequipo
																														from
																															dbtorneoge tge
																														inner join dbtorneos t ON tge.reftorneo = t.idtorneo
																															and t.activo = true
																														inner join dbequipos e ON e.idequipo = tge.refequipo
																														inner join dbgrupos g ON g.idgrupo = tge.refgrupo
																														where
																															tge.idtorneoge = fi.reftorneoge_b))
                                end)
                        from
                            tbgoleadores gg
                        where
                            gg.reffixture = fi.idfixture
                                and gg.refequipo = (select 
                                    tge.refequipo
                                from
                                    dbtorneoge tge
                                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                                    and t.activo = true
                                inner join dbequipos e ON e.idequipo = tge.refequipo
                                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                                where
                                    tge.idtorneoge = fi.reftorneoge_b))
                else fi.resultado_b
            end) as resultado_b,
            (case
                when
                    fi.resultado_a is null
                then
                    (select 
                            (case
                                    when
                                        sum(gg.goles) is null
                                    then
                                        (case
                                            when fi.chequeado = 1 then 0
                                            else null
                                        end)
                                    else sum(gg.goles)- (select coalesce(sum(aaa.arquero),0) from tbamonestados aaa where aaa.reffixture = fi.idfixture
																														and aaa.refequipo = (select 
																															tge.refequipo
																														from
																															dbtorneoge tge
																														inner join dbtorneos t ON tge.reftorneo = t.idtorneo
																															and t.activo = true
																														inner join dbequipos e ON e.idequipo = tge.refequipo
																														inner join dbgrupos g ON g.idgrupo = tge.refgrupo
																														where
																															tge.idtorneoge = fi.reftorneoge_a))
                                end)
                        from
                            tbgoleadores gg
                        where
                            gg.reffixture = fi.idfixture
                                and gg.refequipo = (select 
                                    tge.refequipo
                                from
                                    dbtorneoge tge
                                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                                    and t.activo = true
                                inner join dbequipos e ON e.idequipo = tge.refequipo
                                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                                where
                                    tge.idtorneoge = fi.reftorneoge_a))
                else fi.resultado_a
            end) as resultado_a,
            fi.reffecha,
            tge.refgrupo,
            tge.activo as equipoactivo,
			pe.puntos as bonus
    FROM
        dbtorneoge tge
    Inner Join dbequipos e ON tge.refequipo = e.idequipo
    inner join dbgrupos g ON tge.refgrupo = g.idgrupo
    Inner Join dbtorneos t ON t.idtorneo = tge.reftorneo
    Inner Join dbfixture fi ON tge.idtorneoge = fi.reftorneoge_b
    inner join tbtipotorneo tp ON tp.idtipotorneo = t.reftipotorneo
    inner join tbfechas f ON fi.refFecha = f.idfecha
	inner join tbpuntosequipos pe on pe.refequipo = e.idequipo and pe.reffixture = fi.idfixture and pe.reffecha <= 23
    where
        tge.refgrupo = 19
            and tp.idtipotorneo = 1
            and fi.reffecha <= 23
            and t.activo = 1) as r
    inner join (select 
        refequipo, puntos as puntos, reftorneo
    from
        tbconducta
    where
        reffecha = 23) fp ON r.idequipo = fp.refequipo
        and fp.reftorneo = r.idtorneo
    inner join dbtorneos t ON t.idtorneo = fp.reftorneo
        and t.activo = 1
    group by r.nombre , r.idequipo) as fix
        left join
    dbreemplazo rr ON rr.refequiporeemplazado = fix.idequipo
        and rr.reffecha <= 23
        left join
    dbreemplazo rrr ON rrr.refequipo = fix.idequipo
        and rrr.reffecha <= 23
        and rrr.reftorneo = 1
order by (case
    when rr.idreemplazo is null then fix.pts + COALESCE(rrr.puntos, 0)
    else fix.pts + rr.puntos
end) desc , fix.puntos , fix.golesafavor - (case
    when rr.idreemplazo is null then fix.golesencontra + COALESCE(rrr.golesencontra, 0)
    else fix.golesencontra + rr.golesencontra
end) desc , fix.golesafavor desc , (case
    when rr.idreemplazo is null then fix.golesencontra + COALESCE(rrr.golesencontra, 0)
    else fix.golesencontra + rr.golesencontra
end) , fix.ganados desc