--
-- TEST DATEN FÜR DIE ENTWICKLUNG UND VORFÜHRUNG
--

-- Verwende die Datenbank
USE wunschnest_db;
-- Füge Testdaten für die `users` Tabelle hinzu
INSERT INTO users (username, name, email, password_hash)
VALUES (
        'starlord',
        'Peter Quill',
        'peter@guardians.com',
        '$2y$10$1SftQWI/1Eg9ixwyfjkKuOXhOR6JTmdHZYni6XpMIlwg5UcW5TsNm'
    ),
    (
        'rocket',
        'Rocket Raccoon',
        'rocket@guardians.com',
        '$2y$10$Fq/lWPHpeLDfK9Q5ZtqEFOP4KZuz0IcNiWUSEEuBoTwBU9//lHb.W'
    ),
    (
        'groot',
        'Groot',
        'groot@guardians.com',
        '$2y$10$iYAPsWI513fZhlUSWDPDfuYfk1zV.5H06TwIyVWw.l.I5qUJ8vAjy'
    );
-- Füge Testdaten für die `category` Tabelle hinzu (Standard- und benutzerdefinierte Kategorien)
-- Für Peter
INSERT INTO category (name, user_id)
VALUES ('Elektronik', 1),
    ('Bücher', 1),
    ('Haushalt', 1),
    ('Spielzeug', 1),
    ('Kleidung', 1),
    ('Outdoor', 1),
    ('Gesundheit', 1),
    ('Küche', 1),
    ('Gaming', 1),
    ('Sonstiges', 1);
-- Für Rocket
INSERT INTO category (name, user_id)
VALUES ('Fitness', 2),
    ('Elektronik', 2),
    ('Bücher', 2),
    ('Reise', 2),
    ('Auto', 2),
    ('Werkzeuge', 2),
    ('Haushalt', 2),
    ('Mode', 2),
    ('Haustiere', 2),
    ('Musik', 2);
-- Für Groot
INSERT INTO category (name, user_id)
VALUES ('Sport', 3),
    ('Fotografie', 3),
    ('Technologie', 3),
    ('Küche', 3),
    ('Gesundheit', 3),
    ('Bücher', 3),
    ('Gaming', 3),
    ('Outdoor', 3),
    ('Mode', 3),
    ('Kunst', 3);
-- Füge Testdaten für die `wishlist` Tabelle hinzu
-- Peters Wunschlisten
INSERT INTO wishlist (
        user_id,
        name,
        description,
        target_date,
        is_favorite,
        share_token
    )
VALUES (
        1,
        'Geburtstagsgeschenke',
        'Meine Geburtstagswunschliste voller toller Geschenke',
        '2023-08-15',
        1,
        'VzmQZ4CIFguHDh6d51Cy8dy8Y9cwKy0ixGBsJd3DudeqLz1izJQ41tJh9bofefro'
    ),
    (
        1,
        'Feier zur Rettung der Galaxis',
        'Ich habe ja auch mal ein Dankeschön verdient, dafür dass alle weiterleben können',
        '2025-10-31',
        0,
        'xxrCLSZBw3ZPeDH5dIeXhzo8qt3OhaxsFZs61p5z3dGFaTKbV8Hjaylktpyz0lKb'
    ),
    (
        1,
        'Technische Upgrades',
        'Technik und Gadgets, die ich aufrüsten möchte',
        NULL,
        1,
        'hv6GafBRWStmxZiqSTtlMbXgq7CbFjPUWMzeqvWWVrmCMKCHJk3rwif1diw8j8xV'
    );
-- rocket's Wishlists
INSERT INTO wishlist (
        user_id,
        name,
        description,
        target_date,
        is_favorite,
        share_token
    )
VALUES (
        2,
        'Reiseutensilien',
        'Dinge, die ich für meine nächsten Reisen brauche',
        '2025-08-15',
        1,
        '9VHB6DR0qUixQzfpySv05IORTipAtlQyIzBk01MBXvwvhqOIqkP1ZkSf0I4eSICJ'
    ),
    (
        2,
        'Hausrenovierung',
        'Werkzeuge und Materialien für Renovierungsarbeiten',
        '2025-02-25',
        1,
        'AvAWajoRqcr7odgXvgoM1pKBfE5UEkO5rBxzt5ZK0GK23h8TvKSrGkJbOQFzyk6x'
    ),
    (
        2,
        'Bücherliste',
        'Bücher, die ich dieses Jahr lesen möchte',
        NULL,
        0,
        'XR6rEtMwxyyTGSWIJHkdujF1gj47lij09LYUsbPoMVe11UXca1Kfu5zh9CxmDZkt'
    );
-- Groot's Wishlists
INSERT INTO wishlist (
        user_id,
        name,
        description,
        target_date,
        is_favorite,
        share_token
    )
VALUES (
        3,
        'Fotografie-Ausrüstung',
        'Kameras und Objektive für mein Fotografie-Hobby',
        NULL,
        1,
        'XR6rEtMwxyyTGSWIJHkdujF1gj47lij09LYUsbPoMVe11UXca1Kfu5zh9CxmDZkt'
    ),
    (
        3,
        'Kunstbedarf',
        'Materialien für meine Kunstprojekte',
        NULL,
        0,
        'iYqpiuE3M7oIV5Ru4dLrAdw7oP8aVHFVFxPUwuMFvwdA35lZFvuwYJpOX2M0pPd6'
    ),
    (
        3,
        'Gaming-Wunschliste',
        'Videospiele und Konsolen, die ich mir wünsche',
        NULL,
        1,
        'rRTWREMCMEqV8mOHCOwVxxJBrqYkKVoXPfC2MPvgP1Kb5GuTxiDAYwPgOxWLhy2t'
    );
-- Füge Testdaten für die `favorite` Tabelle hinzu
-- Peter's favorites
INSERT INTO favorite (user_id, wishlist_id)
VALUES (1, 1),
    (1, 3);
-- rocket's favorites
INSERT INTO favorite (user_id, wishlist_id)
VALUES (2, 5),
    (2, 4);
-- Groot's favorites
INSERT INTO favorite (user_id, wishlist_id)
VALUES (3, 7),
    (3, 9);
-- Füge Testdaten für die `wish` Tabelle hinzu
-- Wishes for Peter's "Geburtstagsgeschenke" Wunschliste
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        image_url,
        url
    )
VALUES (
        1,
        'Smartwatch',
        199.99,
        1,
        'A smartwatch with health tracking features',
        'https://www.infranken.de/storage/image/9/3/8/4/4114839_bei-amazon-findest-du-tolle-smart-watch-angebote-rund-um-den-black-friday_1zu1_1BlSy3_hSffcT.jpg',
        'https://example.com/smartwatch'
    ),
    (
        1,
        'Bluetooth Speaker',
        49.99,
        1,
        'Portable speaker for outdoor use',
        'https://cdn.businessinsider.de/wp-content/uploads/2021/07/Bluetooth-Lautsprecher-unter-50-Euro.png?ver=1715848685',
        'https://example.com/speaker'
    ),
    (
        1,
        'Cookbook',
        25.50,
        2,
        'A cookbook with healthy recipes',
        'https://m.media-amazon.com/images/I/81PZK5CctaL._AC_UF894,1000_QL80_.jpg',
        'https://example.com/cookbook'
    ),
    (
        1,
        'Magnetarmband Handwerker',
        19.90,
        10,
        'Handwerker Geschenke - Handwerker Gadget - Geschenke für Männer Papa - Magnetarmband Werkzeug',
        'https://m.media-amazon.com/images/I/718Bp-ANs0L.jpg',
        'https://www.amazon.de/Magnetarmband-Handwerker-Universal-Steckschl%C3%BCssel-Universalschl%C3%BCssel/dp/B09GFDL44P/ref=sxin_15_pa_sp_search_thematic_sspa'
    ),
    (
        1,
        'Karaffe, Whisky Karaffe 1000 ml',
        44.99,
        10,
        'Tankförmige Dekanter, Glaskaraffe mit Verschluss, Whiskey Geschenke für Männer, Whiskey-Liebhaber, Schnapsdekanter, Weinkaraffe in Panzerform, für Rum',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVGmIxGe08IbBbdk8ncudPuD7Gd-cs_ApYmg&s',
        'https://www.amazon.de/Froster-Tankf%C3%B6rmige-Glaskaraffe-Whiskey-Liebhaber-Schnapsdekanter/dp/B004JZ0CC8/ref=sxin_15_pa_sp_search_thematic_sspa'
    ),
    (
        1,
        'Aromatherapie-Duftkerzen-Set',
        29.99,
        10,
        'Entspannende Duftkerzen mit ätherischen Ölen für Wellness und Entspannung',
        'https://www.filipok-berlin.de/wp-content/uploads/DUFTE-Manufaktur-Heimat-Duftkerze.jpg',
        'https://example.com/aromakerzen'
    ),
    (
        1,
        'Flauschige Hausschuhe',
        24.95,
        5,
        'Warme und bequeme Hausschuhe für den Winter',
        'https://i.ebayimg.com/images/g/t7sAAOSwimJj65O8/s-l400.jpg',
        'https://example.com/hausschuhe'
    ),
    (
        1,
        'Puzzle 1000 Teile',
        18.50,
        4,
        'Ein herausforderndes Puzzle für entspannte Abende',
        'https://data.puzzle.de/.17/wonders-of-the-word-12000-teile--puzzle.90349-2.fs.jpg',
        'https://example.com/puzzle'
    ),
    (
        1,
        'Geschenkbox mit Pralinen',
        34.90,
        10,
        'Luxuriöse Pralinenbox mit einer Auswahl feinster Schokolade',
        'https://schokoinfo.de/wp-content/uploads/2020/06/Vielfalt-scaled-1.jpg',
        'https://example.com/pralinen'
    ),
    (
        1,
        'Kuscheldecke',
        39.99,
        5,
        'Weiche und warme Decke für gemütliche Winterabende',
        'https://hase-eule.com/cdn/shop/files/HaseundEule_weicheKuscheldecke_2.png?v=1702385943&width=2048',
        'https://example.com/kuscheldecke'
    ),
    (
        1,
        'Tee-Geschenkset',
        22.99,
        8,
        'Ein Set mit verschiedenen Teesorten für Teeliebhaber',
        '',
        'https://example.com/tee-set'
    ),
    (
        1,
        'Kaffeemaschine',
        99.99,
        8,
        'Moderne Kaffeemaschine für den perfekten Start in den Tag',
        'https://i.etsystatic.com/23712985/r/il/c2f032/2473328641/il_570xN.2473328641_39ph.jpg',
        'https://example.com/kaffeemaschine'
    ),
    (
        1,
        'Socken-Set',
        15.00,
        5,
        'Ein Set mit warmen Wintersocken',
        'https://sw6.elbenwald.de/media/9b/e7/2e/1635760082/E1066862_2.jpg',
        'https://example.com/socken-set'
    ),
    (
        1,
        'Wandkalender 2025',
        12.99,
        2,
        'Ein dekorativer Wandkalender für das neue Jahr',
        'https://www.meinfoto.de/dynamicimage/product/libraryimages/image2/13188/pdp-calendar-wall-snippet-allyear-DE.webp',
        'https://example.com/wandkalender'
    ),
    (
        1,
        'Lichterkette für Innenräume',
        14.50,
        6,
        'Dekorative LED-Lichterkette für eine gemütliche Atmosphäre',
        'https://i.otto.de/i/otto/f24079f4-6fa1-4b53-8aee-9ec990d11400/cozy-home-led-lichterkette-fotoclip-lichterkette-batterie-und-stecker-30-fotoclip-leds-i-timer-funktion-i-6-meter-i-warmweisse-led.jpg?$formatz$',
        'https://example.com/lichterkette'
    );
-- Add more wishes up to 15-20 items for each list
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        2,
        'Champagner-Set',
        150.00,
        8,
        'Ein exklusives Set mit Champagnerflaschen und Gläsern für den großen Sieg',
        'https://example.com/champagner-set'
    ),
    (
        2,
        'Hochwertige Lautsprecheranlage',
        399.99,
        1,
        'Eine Soundanlage für die ultimative Partyatmosphäre',
        'https://example.com/lautsprecheranlage'
    ),
    (
        2,
        'Lichtprojektor',
        79.99,
        6,
        'Ein Projektor, der farbenfrohe Lichteffekte an die Wand wirft',
        'https://example.com/lichtprojektor'
    ),
    (
        2,
        'Riesen-Feuerwerkskörper',
        299.99,
        10,
        'Ein beeindruckendes Feuerwerk, um den Sieg zu feiern',
        'https://example.com/feuerwerk'
    ),
    (
        2,
        'Deluxe Buffet-Set',
        250.00,
        8,
        'Ein luxuriöses Buffet-Set mit allen benötigten Utensilien für die Feier',
        'https://example.com/buffet-set'
    ),
    (
        2,
        'Goldene Siegerkrone',
        45.00,
        10,
        'Eine funkelnde Krone für den gefeierten Sieger',
        'https://example.com/siegerkrone'
    ),
    (
        2,
        'Laser-Show-System',
        189.99,
        6,
        'Ein Lasersystem für eine unvergessliche Partybeleuchtung',
        'https://example.com/laser-show'
    ),
    (
        2,
        'Fotobox mit Zubehör',
        120.00,
        3,
        'Eine Fotobox mit lustigen Accessoires für die Partygäste',
        'https://example.com/fotobox'
    ),
    (
        2,
        'Karaoke-Maschine',
        110.00,
        9,
        'Eine Karaoke-Maschine für musikalische Unterhaltung auf der Feier',
        'https://example.com/karaoke-maschine'
    ),
    (
        2,
        'Personalisiertes Banner',
        35.50,
        10,
        'Ein personalisiertes Banner mit dem Schriftzug "Held des Tages"',
        'https://example.com/banner'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        3,
        'Hochleistungs-Quantenantrieb',
        15000.00,
        1,
        'Ein Antriebssystem für intergalaktische Reisen in Lichtgeschwindigkeit',
        'https://example.com/quantenantrieb'
    ),
    (
        3,
        'Deflektorschild-Generator',
        5000.00,
        1,
        'Ein Schildgenerator, um das Raumschiff vor Angriffen zu schützen',
        'https://example.com/deflektorschild'
    ),
    (
        3,
        'Kommunikationsmodul der Galaktischen Föderation',
        1200.00,
        1,
        'Ein erweitertes Modul zur Kommunikation mit galaktischen Verbündeten',
        'https://example.com/kommunikationsmodul'
    ),
    (
        3,
        'Energieschild-Verstärker',
        2500.00,
        1,
        'Ein Verstärker für maximale Schildleistung in kritischen Situationen',
        'https://example.com/energieschild-verstarker'
    ),
    (
        3,
        'Waffenarsenal mit Plasmastrahlen',
        8000.00,
        10,
        'Ein Set hochentwickelter Plasmastrahlen für den Schutz des Raumschiffs',
        'https://example.com/plasmastrahlen'
    ),
    (
        3,
        'Cybernetic AI-Assistent',
        4500.00,
        3,
        'Ein intelligenter Assistent zur Navigation und Missionsplanung',
        'https://example.com/ai-assistent'
    ),
    (
        3,
        'Kryo-Stasiskammer',
        2000.00,
        6,
        'Ein System zur Erhaltung der Besatzung in Tiefschlaf während langer Reisen',
        'https://example.com/kryo-stasiskammer'
    ),
    (
        3,
        'Nanobot-Reparatursystem',
        3200.00,
        7,
        'Ein automatisches System zur Reparatur von Schäden am Raumschiff',
        'https://example.com/nanobot-reparatur'
    ),
    (
        3,
        'Holographische Projektionskonsole',
        1800.00,
        3,
        'Ein System zur Projektion von Hologrammen für taktische Pläne',
        'https://example.com/holograph-konsole'
    ),
    (
        3,
        'Gravitationsdämpfer',
        2700.00,
        6,
        'Ein Gerät zur Stabilisierung der Schwerkraft auf dem Schiff',
        'https://example.com/gravitationsdampfer'
    ),
    (
        3,
        'Warp-Kern-Stabilisator',
        4000.00,
        1,
        'Ein stabilisierendes Element für den sicheren Betrieb des Warp-Kerns',
        'https://example.com/warp-kern'
    ),
    (
        3,
        'Interstellare Kartendatenbank',
        600.00,
        2,
        'Eine vollständige Datenbank mit allen bekannten Sternensystemen',
        'https://example.com/kartendatenbank'
    ),
    (
        3,
        'Interne Lautsprecheranlage',
        700.00,
        9,
        'Ein System für die Wiedergabe epischer Musik während Missionen',
        'https://example.com/lautsprecheranlage'
    ),
    (
        3,
        'Regenerativer Energiereaktor',
        7500.00,
        1,
        'Ein Reaktor, der Energie selbst regeneriert und speichert',
        'https://example.com/energiereaktor'
    ),
    (
        3,
        'Photonentorpedo-Werfer',
        9000.00,
        10,
        'Ein Waffensystem für den Einsatz in Gefechtssituationen',
        'https://example.com/photonentorpedo'
    ),
    (
        3,
        'Künstliche Schwerkraft-Generatoren',
        3500.00,
        6,
        'Generatoren, um Schwerkraft an Bord zu erzeugen',
        'https://example.com/schwerkraft-generator'
    ),
    (
        3,
        'Astro-Navigationscomputer',
        2900.00,
        3,
        'Ein erweiterter Computer zur Berechnung interstellarer Routen',
        'https://example.com/navigationscomputer'
    ),
    (
        3,
        'Verbesserter Raketenschub',
        2100.00,
        1,
        'Ein Upgrade für den Raketenantrieb für mehr Schubkraft',
        'https://example.com/raketenschub'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        4,
        'Zweipersonenzelt',
        150.00,
        16,
        'Ein robustes Zelt für zwei Personen, ideal für Campingausflüge',
        'https://example.com/zweipersonenzelt'
    ),
    (
        4,
        'Schlafsack mit Isolierung',
        50.00,
        16,
        'Ein warmer Schlafsack für kalte Nächte',
        'https://example.com/schlafsack'
    ),
    (
        4,
        'Campingkocher',
        40.00,
        18,
        'Ein tragbarer Campingkocher für die Zubereitung von Mahlzeiten',
        'https://example.com/campingkocher'
    ),
    (
        4,
        'Isomatte',
        30.00,
        16,
        'Eine leichte und isolierende Isomatte für zusätzlichen Schlafkomfort',
        'https://example.com/isomatte'
    ),
    (
        4,
        'Wasserdichte Wanderstiefel',
        120.00,
        15,
        'Stabile und wasserdichte Wanderstiefel für lange Wanderungen',
        'https://example.com/wanderstiefel'
    ),
    (
        4,
        'Taschenlampe mit Akku',
        20.00,
        11,
        'Eine wiederaufladbare Taschenlampe für nächtliche Abenteuer',
        'https://example.com/taschenlampe'
    ),
    (
        4,
        'Multitool',
        35.00,
        15,
        'Ein praktisches Multitool mit Messer, Zange und Schraubenzieher',
        'https://example.com/multitool'
    ),
    (
        4,
        'Reise-Rucksack',
        60.00,
        16,
        'Ein ergonomischer Rucksack mit vielen Fächern für Campingausrüstung',
        'https://example.com/reiserucksack'
    ),
    (
        4,
        'Solar-Ladegerät',
        45.00,
        12,
        'Ein tragbares Solar-Ladegerät für elektronische Geräte',
        'https://example.com/solar-ladegerat'
    ),
    (
        4,
        'Erste-Hilfe-Set',
        15.00,
        17,
        'Ein kompaktes Erste-Hilfe-Set für Notfälle unterwegs',
        'https://example.com/erste-hilfe-set'
    ),
    (
        4,
        'Klappstuhl',
        25.00,
        16,
        'Ein faltbarer Stuhl für bequemes Sitzen am Lagerfeuer',
        'https://example.com/klappstuhl'
    ),
    (
        4,
        'Trinkflasche aus Edelstahl',
        18.00,
        16,
        'Eine isolierte Trinkflasche, die Wasser lange kühl hält',
        'https://example.com/trinkflasche'
    ),
    (
        4,
        'Kühlbox',
        50.00,
        18,
        'Eine tragbare Kühlbox zur Aufbewahrung von Lebensmitteln',
        'https://example.com/kuhlbox'
    ),
    (
        4,
        'Hängematte',
        40.00,
        16,
        'Eine leichte Hängematte für Entspannung im Freien',
        'https://example.com/hangematte'
    ),
    (
        4,
        'Reisebesteck-Set',
        12.00,
        18,
        'Ein kompaktes Besteckset für Mahlzeiten unterwegs',
        'https://example.com/reisebesteck'
    ),
    (
        4,
        'Wanderkarte der Region',
        8.00,
        12,
        'Eine detaillierte Wanderkarte für die Erkundung der Umgebung',
        'https://example.com/wanderkarte'
    ),
    (
        4,
        'Moskitospray',
        10.00,
        17,
        'Ein effektives Insektenspray zum Schutz vor Mücken',
        'https://example.com/moskitospray'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        5,
        'Akkuschrauber-Set',
        120.00,
        14,
        'Ein leistungsstarkes Akkuschrauber-Set für verschiedene Schraubarbeiten',
        'https://example.com/akkuschrauber-set'
    ),
    (
        5,
        'Laser-Entfernungsmesser',
        45.00,
        12,
        'Ein präziser Laser-Entfernungsmesser für genaue Messungen',
        'https://example.com/laser-entfernungsmesser'
    ),
    (
        5,
        'Wasserwaage mit Magnet',
        15.00,
        12,
        'Eine Wasserwaage mit integriertem Magneten für einfaches Ausrichten',
        'https://example.com/wasserwaage'
    ),
    (
        5,
        'Multifunktionswerkzeug',
        85.00,
        14,
        'Ein vielseitiges Werkzeug für Schneid-, Schleif- und Sägearbeiten',
        'https://example.com/multifunktionswerkzeug'
    ),
    (
        5,
        'Bohrmaschine',
        95.00,
        17,
        'Eine kraftvolle Bohrmaschine für verschiedene Materialien',
        'https://example.com/bohrmaschine'
    ),
    (
        5,
        'Leiter aus Aluminium',
        70.00,
        16,
        'Eine stabile und leichte Aluminiumleiter für Arbeiten in der Höhe',
        'https://example.com/aluminiumleiter'
    ),
    (
        5,
        'Werkzeugkoffer',
        55.00,
        19,
        'Ein kompletter Werkzeugkoffer mit den wichtigsten Handwerkzeugen',
        'https://example.com/werkzeugkoffer'
    ),
    (
        5,
        'Elektrischer Schraubendreher',
        35.00,
        19,
        'Ein elektrischer Schraubendreher für präzise Schraubarbeiten',
        'https://example.com/elektrischer-schraubendreher'
    ),
    (
        5,
        'Schutzbrille',
        12.00,
        17,
        'Eine Schutzbrille für sicheres Arbeiten',
        'https://example.com/schutzbrille'
    ),
    (
        5,
        'Arbeitshandschuhe',
        10.00,
        17,
        'Robuste Arbeitshandschuhe für den Schutz der Hände',
        'https://example.com/arbeitshandschuhe'
    ),
    (
        5,
        'Tapezierwerkzeug-Set',
        20.00,
        18,
        'Ein Set für die perfekte Anbringung von Tapeten',
        'https://example.com/tapezierwerkzeug'
    ),
    (
        5,
        'Farbspritzpistole',
        65.00,
        14,
        'Eine Farbspritzpistole für gleichmäßiges Auftragen von Farbe',
        'https://example.com/farbspritzpistole'
    ),
    (
        5,
        'Schleifmaschine',
        90.00,
        13,
        'Eine Schleifmaschine für Holz- und Metallarbeiten',
        'https://example.com/schleifmaschine'
    ),
    (
        5,
        'Bauleuchte',
        25.00,
        13,
        'Eine helle LED-Bauleuchte für Arbeiten bei schlechten Lichtverhältnissen',
        'https://example.com/bauleuchte'
    ),
    (
        5,
        'Dübel- und Schraubenset',
        15.00,
        13,
        'Ein Set mit Dübeln und Schrauben in verschiedenen Größen',
        'https://example.com/duebel-schrauben-set'
    ),
    (
        5,
        'Schlagschrauber',
        110.00,
        13,
        'Ein Schlagschrauber für besonders feste Schraubverbindungen',
        'https://example.com/schlagschrauber'
    ),
    (
        5,
        'Staubschutzmaske',
        8.00,
        17,
        'Eine Maske zum Schutz vor Staub und Schmutz bei Renovierungsarbeiten',
        'https://example.com/staubschutzmaske'
    ),
    (
        5,
        'Fuchsschwanz-Säge',
        18.00,
        11,
        'Eine Handsäge für präzises Schneiden von Holz',
        'https://example.com/fuchsschwanz-saege'
    ),
    (
        5,
        'Maßband',
        5.00,
        16,
        'Ein flexibles Maßband für genaue Messungen',
        'https://example.com/massband'
    ),
    (
        5,
        'Universalschneider',
        12.50,
        19,
        'Ein vielseitiger Schneider für verschiedene Materialien',
        'https://example.com/universalschneider'
    ),
    (
        5,
        'Drehmomentschlüssel',
        65.00,
        12,
        'Ein Drehmomentschlüssel für präzise Arbeiten an Schraubverbindungen',
        'https://example.com/drehmomentschluessel'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        6,
        'Harry Potter und der Halbblutprinz',
        19.99,
        13,
        'Bestseller von J.K. Rowling, Teil der berühmten Harry-Potter-Reihe',
        'https://example.com/harry-potter-halbblutprinz'
    ),
    (
        6,
        'Der Junge im gestreiften Pyjama',
        14.99,
        13,
        'Berührendes Buch von John Boyne über Freundschaft in schwierigen Zeiten',
        'https://example.com/junge-gestreifter-pyjama'
    ),
    (
        6,
        'Die Bücherdiebin',
        18.50,
        13,
        'Ein bewegender Roman von Markus Zusak über die Kraft der Worte',
        'https://example.com/die-buecherdiebin'
    ),
    (
        6,
        'Twilight – Bis(s) zum Morgengrauen',
        15.99,
        13,
        'Der erste Band der Twilight-Saga von Stephenie Meyer',
        'https://example.com/twilight'
    ),
    (
        6,
        'Verblendung',
        16.99,
        13,
        'Ein packender Thriller von Stieg Larsson, der erste Teil der Millennium-Trilogie',
        'https://example.com/verblendung'
    ),
    (
        6,
        'Shades of Grey – Geheimes Verlangen',
        12.99,
        13,
        'Ein Bestseller von E.L. James über Leidenschaft und Geheimnisse',
        'https://example.com/shades-of-grey'
    ),
    (
        6,
        'Der Hundertjährige, der aus dem Fenster stieg und verschwand',
        14.50,
        13,
        'Ein humorvoller Roman von Jonas Jonasson',
        'https://example.com/der-hundertjaehrige'
    ),
    (
        6,
        'Ein ganzes halbes Jahr',
        10.99,
        13,
        'Eine berührende Liebesgeschichte von Jojo Moyes',
        'https://example.com/ein-ganzes-halbes-jahr'
    ),
    (
        6,
        'Gone Girl – Das perfekte Opfer',
        11.99,
        13,
        'Ein spannender Thriller von Gillian Flynn',
        'https://example.com/gone-girl'
    ),
    (
        6,
        'Das Schicksal ist ein mieser Verräter',
        9.99,
        13,
        'Ein emotionaler Roman von John Green über das Leben und die Liebe',
        'https://example.com/schicksal-mieser-verraeter'
    ),
    (
        6,
        'Er ist wieder da',
        13.50,
        13,
        'Eine Satire von Timur Vermes über eine unerwartete Rückkehr',
        'https://example.com/er-ist-wieder-da'
    ),
    (
        6,
        'Die Tribute von Panem – Tödliche Spiele',
        14.99,
        13,
        'Der erste Band der Panem-Trilogie von Suzanne Collins',
        'https://example.com/tribute-von-panem'
    ),
    (
        6,
        'Der Medicus',
        17.99,
        13,
        'Ein historischer Roman von Noah Gordon',
        'https://example.com/der-medicus'
    ),
    (
        6,
        'Die Analphabetin, die rechnen konnte',
        13.99,
        13,
        'Ein humorvoller Roman von Jonas Jonasson',
        'https://example.com/analphabetin'
    ),
    (
        6,
        'Das Rosie-Projekt',
        12.50,
        13,
        'Ein Roman von Graeme Simsion über eine ungewöhnliche Liebesgeschichte',
        'https://example.com/rosie-projekt'
    ),
    (
        6,
        'Girl on the Train – Du kennst sie nicht, aber sie kennt dich',
        11.50,
        13,
        'Ein packender Thriller von Paula Hawkins',
        'https://example.com/girl-on-the-train'
    ),
    (
        6,
        'Die Geschichte der Bienen',
        15.99,
        13,
        'Ein Roman von Maja Lunde über die Verbindung zwischen Mensch und Natur',
        'https://example.com/geschichte-der-bienen'
    ),
    (
        6,
        'Der Pfau',
        14.50,
        13,
        'Ein humorvoller Roman von Isabel Bogdan',
        'https://example.com/der-pfau'
    ),
    (
        6,
        'QualityLand',
        13.99,
        13,
        'Eine satirische Zukunftsvision von Marc-Uwe Kling',
        'https://example.com/qualityland'
    ),
    (
        6,
        'Der Gesang der Flusskrebse',
        12.99,
        13,
        'Ein Bestseller von Delia Owens über Liebe und Einsamkeit',
        'https://example.com/gesang-der-flusskrebse'
    ),
    (
        6,
        'Achtsam morden',
        10.99,
        13,
        'Ein humorvoller Krimi von Karsten Dusse',
        'https://example.com/achtsam-morden'
    ),
    (
        6,
        'Der Heimweg',
        13.50,
        13,
        'Ein spannender Thriller von Sebastian Fitzek',
        'https://example.com/der-heimweg'
    ),
    (
        6,
        'Über Menschen',
        11.50,
        13,
        'Ein gesellschaftskritischer Roman von Juli Zeh',
        'https://example.com/ueber-menschen'
    ),
    (
        6,
        'Eine Frage der Chemie',
        14.50,
        13,
        'Ein Roman von Bonnie Garmus über eine unkonventionelle Heldin',
        'https://example.com/frage-der-chemie'
    ),
    (
        6,
        'Die Einladung',
        12.99,
        13,
        'Ein packender Psychothriller von Sebastian Fitzek',
        'https://example.com/die-einladung'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        7,
        'DSLR-Kamera Canon EOS 90D',
        1200.00,
        23,
        'Hochwertige DSLR-Kamera mit 32,5 MP für professionelle Fotografie',
        'https://example.com/canon-eos-90d'
    ),
    (
        7,
        'Objektiv Canon EF 50mm f/1.8 STM',
        120.00,
        23,
        'Festbrennweitenobjektiv mit hoher Lichtstärke für Porträtaufnahmen',
        'https://example.com/canon-50mm'
    ),
    (
        7,
        'Kamerastativ Manfrotto',
        150.00,
        23,
        'Stabiles Stativ für Langzeitbelichtungen und Landschaftsfotografie',
        'https://example.com/manfrotto-stativ'
    ),
    (
        7,
        'Externer Blitz Canon Speedlite',
        250.00,
        23,
        'Leistungsstarker Blitz für bessere Ausleuchtung bei schlechten Lichtverhältnissen',
        'https://example.com/speedlite-blitz'
    ),
    (
        7,
        'Kamerarucksack Lowepro',
        100.00,
        23,
        'Rucksack mit Fächern für Kamera und Zubehör',
        'https://example.com/kamerarucksack'
    ),
    (
        7,
        'Reflektor-Set',
        30.00,
        23,
        'Faltbare Reflektoren für bessere Lichtsteuerung bei Fotoshootings',
        'https://example.com/reflektor-set'
    ),
    (
        7,
        'Makroobjektiv Sigma 105mm',
        450.00,
        23,
        'Objektiv für beeindruckende Nahaufnahmen und Detailfotografie',
        'https://example.com/makroobjektiv'
    ),
    (
        7,
        'Kameradrohne DJI Mini 3',
        600.00,
        23,
        'Kompakte Drohne für atemberaubende Luftaufnahmen',
        'https://example.com/dji-mini-3'
    ),
    (
        7,
        'Speicherkarte SanDisk 128GB',
        25.00,
        23,
        'Schnelle SD-Karte für hochauflösende Fotos und Videos',
        'https://example.com/sandisk-128gb'
    ),
    (
        7,
        'Polarisationsfilter Hoya',
        35.00,
        23,
        'Filter zur Reduzierung von Spiegelungen und für sattere Farben',
        'https://example.com/polarisationsfilter'
    ),
    (
        7,
        'Fernauslöser',
        20.00,
        23,
        'Kabelloser Fernauslöser für verwacklungsfreie Aufnahmen',
        'https://example.com/fernausloeser'
    ),
    (
        7,
        'Gimbal für Kameras',
        300.00,
        23,
        'Stabilisator für flüssige Videoaufnahmen',
        'https://example.com/kamera-gimbal'
    ),
    (
        7,
        'Reinigungsset für Kameraobjektive',
        15.00,
        23,
        'Set zur Pflege und Reinigung von Kameraobjektiven',
        'https://example.com/reinigungsset'
    ),
    (
        7,
        'Weitwinkelobjektiv Canon EF-S 10-18mm',
        250.00,
        23,
        'Objektiv für beeindruckende Weitwinkelaufnahmen',
        'https://example.com/weitwinkelobjektiv'
    ),
    (
        7,
        'Lichtzelt für Produktfotografie',
        50.00,
        23,
        'Lichtzelt für gleichmäßige Beleuchtung bei Produktfotos',
        'https://example.com/lichtzelt'
    ),
    (
        7,
        'Externe Festplatte 2TB',
        90.00,
        23,
        'Externe Festplatte zur Sicherung großer Fotodateien',
        'https://example.com/externe-festplatte'
    ),
    (
        7,
        'Lichtstativ',
        40.00,
        23,
        'Stativ für Studiobeleuchtung',
        'https://example.com/lichtstativ'
    ),
    (
        7,
        'Softbox-Set',
        100.00,
        23,
        'Softboxen für weiche und gleichmäßige Ausleuchtung im Studio',
        'https://example.com/softbox-set'
    ),
    (
        7,
        'Fotodrucker Canon Selphy',
        120.00,
        23,
        'Drucker für hochwertige Fotodrucke im Kleinformat',
        'https://example.com/canon-selphy'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        8,
        'Aquarellfarben-Set',
        30.00,
        30,
        'Ein Set hochwertiger Aquarellfarben für Kunstprojekte',
        'https://example.com/aquarellfarben-set'
    ),
    (
        8,
        'Leinwandpackung',
        20.00,
        30,
        'Ein Packung mit Leinwänden in verschiedenen Größen',
        'https://example.com/leinwandpackung'
    ),
    (
        8,
        'Pinselset',
        15.00,
        30,
        'Ein Set mit verschiedenen Pinseln für unterschiedliche Maltechniken',
        'https://example.com/pinselset'
    ),
    (
        8,
        'Acrylfarben-Set',
        25.00,
        30,
        'Ein Set leuchtender Acrylfarben für vielseitige Malerei',
        'https://example.com/acrylfarben-set'
    ),
    (
        8,
        'Zeichenblock',
        10.00,
        30,
        'Ein hochwertiger Zeichenblock für Skizzen und Zeichnungen',
        'https://example.com/zeichenblock'
    ),
    (
        8,
        'Malkoffer',
        50.00,
        30,
        'Ein tragbarer Malkoffer mit allen wichtigen Utensilien',
        'https://example.com/malkoffer'
    ),
    (
        8,
        'Pastellkreiden',
        18.00,
        30,
        'Ein Set von Pastellkreiden für farbenfrohe Kunstwerke',
        'https://example.com/pastellkreiden'
    ),
    (
        8,
        'Kalligrafie-Set',
        22.00,
        30,
        'Ein Set für die Kunst der Kalligrafie mit verschiedenen Stiften und Tinten',
        'https://example.com/kalligrafie-set'
    ),
    (
        8,
        'Staffelei aus Holz',
        35.00,
        30,
        'Eine robuste Holzstaffelei für das Arbeiten an großen Leinwänden',
        'https://example.com/staffelei'
    );
INSERT INTO wish (
        wishlist_id,
        name,
        price,
        category_id,
        description,
        url
    )
VALUES (
        9,
        'Gaming-PC',
        1500.00,
        27,
        'Leistungsstarker Gaming-PC für flüssiges Spielen in höchster Auflösung',
        'https://example.com/gaming-pc'
    ),
    (
        9,
        'Gaming-Stuhl',
        200.00,
        27,
        'Ergonomischer Gaming-Stuhl für langen Spielkomfort',
        'https://example.com/gaming-stuhl'
    ),
    (
        9,
        'Gaming-Tastatur mechanisch',
        80.00,
        27,
        'Mechanische Tastatur mit RGB-Beleuchtung',
        'https://example.com/gaming-tastatur'
    ),
    (
        9,
        'Gaming-Maus Logitech G502',
        60.00,
        27,
        'Präzise Gaming-Maus mit anpassbaren Tasten',
        'https://example.com/logitech-g502'
    ),
    (
        9,
        'Monitor 144Hz',
        300.00,
        27,
        'Gaming-Monitor mit 144Hz für flüssiges Gameplay',
        'https://example.com/144hz-monitor'
    ),
    (
        9,
        'Headset mit Mikrofon',
        70.00,
        27,
        'Gaming-Headset mit Surround-Sound und klarem Mikrofon',
        'https://example.com/gaming-headset'
    ),
    (
        9,
        'Gaming-Controller',
        50.00,
        27,
        'Controller für PC- und Konsolenspiele',
        'https://example.com/gaming-controller'
    ),
    (
        9,
        'Mauspad XXL',
        20.00,
        27,
        'Großes Mauspad für optimale Mausbewegungen',
        'https://example.com/xxl-mauspad'
    ),
    (
        9,
        'Lichterkette für Gaming-Setup',
        15.00,
        27,
        'LED-Lichterkette für stimmungsvolle Beleuchtung',
        'https://example.com/gaming-lichterkette'
    ),
    (
        9,
        'VR-Headset Oculus Quest 2',
        400.00,
        27,
        'Virtual-Reality-Headset für ein immersives Spielerlebnis',
        'https://example.com/oculus-quest-2'
    ),
    (
        9,
        'Spiel „Elden Ring“',
        60.00,
        27,
        'Ein episches Action-Rollenspiel von FromSoftware',
        'https://example.com/elden-ring'
    ),
    (
        9,
        'Spiel „The Legend of Zelda: Breath of the Wild“',
        50.00,
        27,
        'Ein Open-World-Abenteuer für Nintendo Switch',
        'https://example.com/zelda-breath-of-the-wild'
    ),
    (
        9,
        'Spiel „Cyberpunk 2077“',
        40.00,
        27,
        'Futuristisches Rollenspiel mit tiefgehender Story',
        'https://example.com/cyberpunk-2077'
    ),
    (
        9,
        'Spiel „God of War Ragnarök“',
        60.00,
        27,
        'Fortsetzung des beliebten Action-Abenteuers',
        'https://example.com/god-of-war-ragnarok'
    ),
    (
        9,
        'Spiel „Hogwarts Legacy“',
        55.00,
        27,
        'Rollenspiel in der Welt von Harry Potter',
        'https://example.com/hogwarts-legacy'
    ),
    (
        9,
        'Lenkrad für Rennspiele',
        150.00,
        27,
        'Lenkrad mit Pedalen für realistische Rennspiele',
        'https://example.com/lenkrad'
    ),
    (
        9,
        'Capture Card Elgato',
        100.00,
        27,
        'Zum Aufnehmen und Streamen von Gameplay in hoher Qualität',
        'https://example.com/capture-card'
    ),
    (
        9,
        'Externe SSD 1TB',
        100.00,
        27,
        'Schnelle Speicherlösung für große Spielebibliotheken',
        'https://example.com/ssd-1tb'
    ),
    (
        9,
        'PlayStation 5 Konsole',
        500.00,
        27,
        'Die neueste Konsole von Sony',
        'https://example.com/ps5'
    ),
    (
        9,
        'Xbox Series X',
        500.00,
        27,
        'Die leistungsstärkste Xbox-Konsole',
        'https://example.com/xbox-series-x'
    ),
    (
        9,
        'Steam-Geschenkkarte 50€',
        50.00,
        27,
        'Guthabenkarte für den Steam-Store',
        'https://example.com/steam-karte'
    ),
    (
        9,
        'Spiel „Red Dead Redemption 2“',
        40.00,
        27,
        'Ein Western-Epos mit offener Welt',
        'https://example.com/red-dead-redemption-2'
    ),
    (
        9,
        'Gaming-Tisch',
        150.00,
        27,
        'Spezieller Tisch für Gaming-Setups',
        'https://example.com/gaming-tisch'
    ),
    (
        9,
        'Streaming-Mikrofon',
        80.00,
        27,
        'Hochwertiges Mikrofon für Livestreams und Podcasts',
        'https://example.com/streaming-mikrofon'
    ),
    (
        9,
        'Spiel „Assassin’s Creed Valhalla“',
        50.00,
        27,
        'Ein Abenteuer im Zeitalter der Wikinger',
        'https://example.com/assassins-creed-valhalla'
    ),
    (
        9,
        'RGB-Lichtleisten',
        25.00,
        27,
        'Leuchtleisten zur Dekoration des Gaming-Bereichs',
        'https://example.com/rgb-lichtleisten'
    ),
    (
        9,
        'Wireless Gaming-Maus',
        70.00,
        27,
        'Kabellose Gaming-Maus für mehr Bewegungsfreiheit',
        'https://example.com/wireless-gaming-maus'
    ),
    (
        9,
        'Kühlpad für Laptop',
        25.00,
        27,
        'Kühlvorrichtung zur Reduzierung der Laptop-Temperatur beim Spielen',
        'https://example.com/kuehlpad'
    ),
    (
        9,
        'Gaming-Laptop',
        1200.00,
        27,
        'Leistungsstarker Laptop für unterwegs',
        'https://example.com/gaming-laptop'
    ),
    (
        9,
        'Spiel „The Witcher 3: Wild Hunt“',
        30.00,
        27,
        'Ein preisgekröntes Rollenspiel mit tiefgehender Story',
        'https://example.com/the-witcher-3'
    ),
    (
        9,
        'Schwenkarm für Mikrofon',
        20.00,
        27,
        'Arm zur flexiblen Positionierung des Mikrofons',
        'https://example.com/schwenkarm'
    ),
    (
        9,
        'Soundbar für Gaming',
        100.00,
        27,
        'Kompakte Soundbar für klaren Sound beim Spielen',
        'https://example.com/gaming-soundbar'
    );