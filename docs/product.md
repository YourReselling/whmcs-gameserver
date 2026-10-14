# Gameserver

Bestellung: `POST /products/gameserver`. ID: `data.id`.

Kundenfelder: `name`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `cores` | integer | Ja | required; integer; min:1; max:64 |
| `disk_gb` | integer | Ja | required; integer; min:5; max:4000 |
| `egg_id` | string | Ja | required; uuid; exists:product_eggs,id |
| `location_id` | string | Ja | required; uuid; exists:rootserver_locations,id |
| `name` | string | Ja | required; string; max:64 |
| `network_mode` | string | Ja | required; in:shared_port,dedicated_ip |
| `ram_mb` | integer | Ja | required; integer; min:512; max:262144 |
| `extra_ports` | array | Nein | nullable; array; max:8 |
| `subdomain` | string | Nein | nullable; required_with:subdomain_zone_id; string; max:63 |
| `subdomain_zone_id` | string | Nein | nullable; uuid; exists:gameserver_subdomain_zones,id |
| `variables` | object | Nein | nullable; array |

API-Key-Rechte für alle Modulansichten und Aktionen: `gameservers:create`, `gameservers:delete`, `gameservers:power`, `gameservers:read`, `gameservers:update`.

Verwaltungsaktionen: Umbenennen, Backup erstellen, Konsolenbefehl ausführen, Spieler verwalten, Neu starten, Sicherheitsprüfung starten, Zeitplan erstellen, Starten, Stoppen.

Hinweise:
- network_mode shared_port or dedicated_ip
- Egg-specific variables available from catalog; validate/quote before ordering
- No suspend/unsuspend endpoint; stop/start are power operations
