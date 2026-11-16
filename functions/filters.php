<?php
function filtrerDisponibles(array $vehicules): array
{
    return array_values(
        array_filter($voitures,
            fn(array $v): bool => $v['statut'] === 'DISPO')
    );

}
