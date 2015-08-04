select 
    (select 
            ea.nombre
        from
            dbequipos ea
        where
            ea.idequipo = t.equipoa) as equipo1,
    t.resultadoa,
    t.resultadob,
    (select 
            ea.nombre
        from
            dbequipos ea
        where
            ea.idequipo = t.equipob) as equipo2,
    t.fechajuego,
    t.fecha,
    t.hora,
    t.idfixture
from
    (select 
        fi.idfixture,
            (select 
                    e.idequipo
                from
                    dbtorneoge tge
                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                    and t.activo = 1
                inner join tbtipotorneo tp ON t.reftipotorneo = tp.idtipotorneo
                inner join dbequipos e ON e.idequipo = tge.refequipo
                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                where
                    tge.idtorneoge = fi.reftorneoge_a
                        and g.idgrupo = 19
                        and tp.idtipotorneo = 1) as equipoa,
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
                                    else sum(gg.goles)
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
            end) as resultadoa,
            (select 
                    e.idequipo
                from
                    dbtorneoge tge
                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                    and t.activo = 1
                inner join tbtipotorneo tp ON t.reftipotorneo = tp.idtipotorneo
                inner join dbequipos e ON e.idequipo = tge.refequipo
                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                where
                    tge.idtorneoge = fi.reftorneoge_b
                        and g.idgrupo = 19
                        and tp.idtipotorneo = 1) as equipob,
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
                                    else sum(gg.goles)
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
            end) as resultadob,
            (select 
                    g.nombre
                from
                    dbtorneoge tge
                inner join dbtorneos t ON tge.reftorneo = t.idtorneo
                    and t.activo = 1
                inner join tbtipotorneo tp ON t.reftipotorneo = tp.idtipotorneo
                inner join dbequipos e ON e.idequipo = tge.refequipo
                inner join dbgrupos g ON g.idgrupo = tge.refgrupo
                where
                    tge.idtorneoge = fi.reftorneoge_b
                        and g.idgrupo = 19
                        and tp.idtipotorneo = 1) as zona,
            fi.fechajuego,
            f.idfecha as fecha,
            DATE_FORMAT(fi.hora, '%k:%i') as hora
    from
        dbfixture as fi
    inner join tbfechas AS f ON fi.reffecha = f.idfecha
    inner join dbtorneoge tge ON tge.idtorneoge = fi.reftorneoge_b
    inner join dbtorneos t ON tge.reftorneo = t.idtorneo
        and t.activo = 1
    inner join tbtipotorneo tp ON t.reftipotorneo = tp.idtipotorneo
    inner join dbgrupos g ON g.idgrupo = tge.refgrupo
    where
        g.idgrupo = 19
            and tp.idtipotorneo = 1
    order by fecha desc) as t
where
    t.fecha = '23'