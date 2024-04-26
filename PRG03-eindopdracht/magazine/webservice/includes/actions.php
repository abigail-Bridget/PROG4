<?php
/**
 * @return array
 */

function getGuides()
{
    return [
        [
            "id" => 1,
            "name" => "",
            "image" => "cav.png",
        ],
        [
            "id" => 2,
            "name" => "",
            "image" => "jackal.png",
        ],
        [
            "id" => 3,
            "name" => "",
            "image" => "mute.png",
        ],
        [
            "id" => 4,
            "name" => "",
            "image" => "sledge.png",
        ],
        [
            "id" => 5,
            "name" => "",
            "image" => "cav_gold.png",
        ],
        [
            "id" => 6,
            "name" => "",
            "image" => "jackal_gold.png",
        ],
        [
            "id" => 7,
            "name" => "",
            "image" => "mute_gold.png",
        ],
        [
            "id" => 8,
            "name" => "",
            "image" => "sledge_gold.png",
        ],
        [
            "id" => 9,
            "name" => "",
            "image" => "cav_purple.png",
        ],
        [
            "id" => 10,
            "name" => "",
            "image" => "jackal_purple.png",
        ],
        [
            "id" => 11,
            "name" => "",
            "image" => "mute_purple.png",
        ],
        [
            "id" => 12,
            "name" => "",
            "image" => "sledge_purple.png",
        ],
        [
            "id" => 13,
            "name" => "",
            "image" => "cav_uni_gold.png",
        ],
        [
            "id" => 14,
            "name" => "",
            "image" => "jackal_uni_gold.png",
        ],
        [
            "id" => 15,
            "name" => "",
            "image" => "mute_uni_gold.png",
        ],
        [
            "id" => 16,
            "name" => "",
            "image" => "sledge_uni_gold.png",
        ],
        [
            "id" => 17,
            "name" => "",
            "image" => "cav_uni_purple.png",
        ],
        [
            "id" => 18,
            "name" => "",
            "image" => "jackal_uni_purple.png",
        ],
        [
            "id" => 19,
            "name" => "",
            "image" => "mute_uni_purple.png",
        ],
        [
            "id" => 20,
            "name" => "",
            "image" => "sledge_uni_purple.png",
        ],
        [
            "id" => 21,
            "name" => "",
            "image" => "cav_weapon_gold.png",
        ],
        [
            "id" => 22,
            "name" => "",
            "image" => "jackal_weapon_gold.png",
        ],
        [
            "id" => 23,
            "name" => "",
            "image" => "mute_weapon_gold.png",
        ],
        [
            "id" => 24,
            "name" => "",
            "image" => "sledge_weapon_gold.png",
        ],
        [
            "id" => 25,
            "name" => "",
            "image" => "cav_weapon_purple.png",
        ],
        [
            "id" => 26,
            "name" => "",
            "image" => "jackal_weapon_purple.png",
        ],
        [
            "id" => 27,
            "name" => "",
            "image" => "mute_weapon_purple.png",
        ],
        [
            "id" => 28,
            "name" => "",
            "image" => "sledge_weapon_purple.png",
        ],
        [
            "id" => 29,
            "name" => "",
            "image" => "cav_sec_gold.png",
        ],
        [
            "id" => 30,
            "name" => "",
            "image" => "jackal_sec_gold.png",
        ],
        [
            "id" => 31,
            "name" => "",
            "image" => "mute_sec_gold.png",
        ],
        [
            "id" => 32,
            "name" => "",
            "image" => "sledge_sec_gold.png",
        ],
        [
            "id" => 33,
            "name" => "",
            "image" => "cav_sec_purple.png",
        ],
        [
            "id" => 34,
            "name" => "",
            "image" => "jackal_sec_purple.png",
        ],
        [
            "id" => 35,
            "name" => "",
            "image" => "mute_sec_purple.png",
        ],
        [
            "id" => 36,
            "name" => "",
            "image" => "sledge_sec_purple.png",
        ],
        [
            "id" => 37,
            "name" => "",
            "image" => "cav_charm_gold.png",
        ],
        [
            "id" => 38,
            "name" => "",
            "image" => "jackal_charm_gold.png",
        ],
        [
            "id" => 39,
            "name" => "",
            "image" => "mute_charm_gold.png",
        ],
        [
            "id" => 40,
            "name" => "",
            "image" => "sledge_charm_gold.png",
        ],
        [
            "id" => 41,
            "name" => "",
            "image" => "cav_charm_purple.png",
        ],
        [
            "id" => 42,
            "name" => "",
            "image" => "jackal_charm_purple.png",
        ],
        [
            "id" => 43,
            "name" => "",
            "image" => "mute_charm_purple.png",
        ],
        [
            "id" => 44,
            "name" => "",
            "image" => "sledge_charm_purple.png",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 *
 */

function getSiegeDetails($id)
{
    $tags = [
        1 => [
            "operator" => "Caveira",
            "rarity" => "Default",
            "availability" =>"Default",
            "bundle" => "Default",
            "season" => "Skull Rain",
        ],
        2 => [
            "operator" => "Jackal",
            "rarity" => "Default",
            "availability" =>"Default",
            "bundle" => "Default",
            "season" => "Velvet Shell",
        ],
        3 => [
            "operator" => "Mute",
            "rarity" => "Default",
            "availability" =>"Default",
            "bundle" => "Default",
            "season" => "Game Launch",
        ],
        4 => [
            "operator" => "Sledge",
            "rarity" => "Default",
            "availability" =>"Default",
            "bundle" => "Default",
            "season" => "Game Lauch",
        ],
        5 => [
            "operator" => "Caveira",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Alpha Packs",
            "season" => "Ember Rise",
        ],
        6 => [
            "operator" => "jackal",
            "rarity" => "Legendary",
            "availability" =>"Removed",
            "bundle" => "M.U.T.E Protocol Packs",
            "season" => "Steel Wave",
        ],
        7 => [
            "operator" => "mute",
            "rarity" => "Legendary",
            "availability" =>"Removed",
            "bundle" => "Nighthaven R&D Packs",
            "season" => "Shifting Tides",
        ],
        8 => [
            "operator" => "sledge",
            "rarity" => "Legendary",
            "availability" =>"Removed",
            "bundle" => "Road to S.I. 2020 Event",
            "season" => "Shifting Tides",
        ],
        9 => [
            "operator" => "Caveira",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Twitch Prime Drops",
            "season" => "Crimson Heist",
        ],
        10 => [
            "operator" => "jackal",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Class Of Zero Battlepass",
            "season" => "Shadow Legacy",
        ],
        11 => [
            "operator" => "mute",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Scorched Headgear Bundle",
            "season" => "Operation Health",
        ],
        12 => [
            "operator" => "sledge",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Alpha Packs",
            "season" => "Skull Rain",
        ],
        13 => [
            "operator" => "Caveira",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Mata-Leao Elite",
            "season" => "Shifting Tides",
        ],
        14 => [
            "operator" => "jackal",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Rastreador Elite",
            "season" => "Crimson Heist",
        ],
        15 => [
            "operator" => "mute",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "F Squadron Elite",
            "season" => "White Noise",
        ],
        16 => [
            "operator" => "sledge",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "L Detachment Elite",
            "season" => "Red Crow",
        ],
        17 => [
            "operator" => "Caveira",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Alpha Packs",
            "season" => "Red Crow",
        ],
        18 => [
            "operator" => "jackal",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Pro League Jackal Set 1",
            "season" => "Chimera",
        ],
        19 => [
            "operator" => "mute",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Pro League Mute Set 2",
            "season" => "Steel Wave",
        ],
        20 => [
            "operator" => "sledge",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "G2 Esports Full Kit '19",
            "season" => "Ember Rise",
        ],
        21 => [
            "operator" => "Caveira",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Mata-Leao Elite",
            "season" => "Shifting Tides",
        ],
        22 => [
            "operator" => "jackal",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Alpha Packs",
            "season" => "Burnt Horizon",
        ],
        23 => [
            "operator" => "mute",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Sanguine Arsenic Elite",
            "season" => "Phantom Sight",
        ],
        24 => [
            "operator" => "sledge",
            "rarity" => "Legendary",
            "availability" =>"Removed",
            "bundle" => "Full Siege Bundle",
            "season" => "Shifting Tides",
        ],
        25 => [
            "operator" => "Caveira",
            "weapon" => "M12",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Twich Prime Drops",
            "season" => "Crimson Heist",
        ],
        26 => [
            "operator" => "jackal",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "R6Share Program",
            "season" => "Neon Dawn",
        ],
        27 => [
            "operator" => "mute",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Pilot Program Phase 2",
            "season" => "Shifting Tides",
        ],
        28 => [
            "operator" => "sledge",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "R6Share Program",
            "season" => "Neon Dawn",
        ],
        29 => [
            "operator" => "Caveira",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Responsa Elite",
            "season" => "Shifting Tides",
        ],
        30 => [
            "operator" => "jackal",
            "rarity" => "Legendary",
            "availability" =>"Removed",
            "bundle" => "The Grand Larceny Packs",
            "season" => "Void Edge",
        ],
        31 => [
            "operator" => "mute",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Sanguine Arsenic Elite",
            "season" => "Phantom Sight",
        ],
        32 => [
            "operator" => "sledge",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Sanguine Arsenic Elite",
            "season" => "Phantom Sight",
        ],
        33 => [
            "operator" => "Caveira",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Oil Spill Bundle",
            "season" => "Red Crow",
        ],
        34 => [
            "operator" => "jackal",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Traje De Luces Bundle",
            "season" => "Velvet Shell",
        ],
        35 => [
            "operator" => "mute",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Rainbow Is Magic Packs",
            "season" => "Crimson Heist",
        ],
        36 => [
            "operator" => "sledge",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Engraved Bundle",
            "season" => "Game Launch",
        ],
        37 => [
            "operator" => "Caveira",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Mata-Leao Elite",
            "season" => "Shifting Tides",
        ],
        38 => [
            "operator" => "jackal",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "Rastreador Elite",
            "season" => "Crimson Heist",
        ],
        39 => [
            "operator" => "mute",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "F Squadron Elite",
            "season" => "White Noise",
        ],
        40 => [
            "operator" => "sledge",
            "rarity" => "Legendary",
            "availability" =>"Available",
            "bundle" => "L Detachment Elite",
            "season" => "Red Crow",
        ],
        41 => [
            "operator" => "Caveira",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Chibi Collection Six",
            "season" => "Wind Bastion",
        ],
        42 => [
            "operator" => "jackal",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Pro League Jackal Set 1",
            "season" => "Chimera",
        ],
        43 => [
            "operator" => "mute",
            "rarity" => "Epic",
            "availability" =>"Removed",
            "bundle" => "Pro League Mute Set 2",
            "season" => "Steel Wave",
        ],
        44 => [
            "operator" => "sledge",
            "rarity" => "Epic",
            "availability" =>"Available",
            "bundle" => "Chibi Collection Six",
            "season" => "Grim Sky",
        ],
    ];

    return $tags[$id];
}