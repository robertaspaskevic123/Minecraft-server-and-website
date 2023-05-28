/*					MMMMMMMMMMMMMNNNNmmmmmmmNNNMMMMMMMMMMMMM
					MMMMMMMMMNNmmmmmmmmmmmmmmmmmmNNMMMMMMMMM
					MMMMMMNNmmmmmmmmmmmmmmmmmmmmmmmmNNMMMMMM
					MMMMNNmmmmmmmmmmmmmmmmmmmmmmmmmmmmNNMMMM
					MMMNmmmmmmmmmmmdod+sdmmmmmmmmmmmmmmmNMMM
					MMNmmmmmmmmmmho:/d:--/sdmmmmmmmmmmmmmNMM
					MNmmmmmmmmmd+--::h/:-:oymmmmmmmmmmmmmmNM
					Nmmmmmmmmmmdssoo+yosso/+mmmmymmmmmmmmmmN
					Nmmmmmmmmmmms///+yy/:::omyo:-:hmmmmmmmmN
					mmmmmmmmy:/+h/:::+y:::yd+//::-.ommmmmmmm
					mmmmmmmm//++sh::::h:::d/ss///oshmmmmmmmm
					Nmmmmmmmh+///so---h:-:h::/yyo/smmmmmmmmN
					Nmmmmmmmmd/:::y:--s/-+s:::h::ymmmmmmmmmN
					MNmmmmmmmmmo--:y--+o-s/--s/-ymmmmmmmmmNM
					MMNmmmmmmmmmhyyms/:y-hy/:hsdmmmmmmmmmNMM
					MMMNmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmNMMM
					MMMMMNmmmmmmmmmmmmmmmmmmmmmmmmmmmmNNMMMM
					MMMMMMNNmmmmmmmmmmmmmmmmmmmmmmmmNNMMMMMM
					MMMMMMMMMNNmmmmmmmmmmmmmmmmmmNNMMMMMMMMM
					MMMMMMMMMMMMMNNNNmmmmmmNNNNMMMMMMMMMMMMM

							===	t1122p_changes ===							*/						

import crafttweaker.oredict.IOreDict;
import crafttweaker.oredict.IOreDictEntry;

// Vanilla Bookshelf compact with Chisel
<minecraft:bookshelf>.displayName = "Oak Bookshelf";
recipes.remove(<minecraft:bookshelf>);
recipes.addShaped(<minecraft:bookshelf>,
													[[<minecraft:oak_stairs>, null, <minecraft:oak_stairs>],
													[<minecraft:book>, <minecraft:book>, <minecraft:book>],
													[<minecraft:oak_stairs>, null, <minecraft:oak_stairs>]]);
													
// PlanetProgression Keycard reasonable recipe
recipes.remove(<planetprogression:dish_keycard>);
recipes.addShaped(<planetprogression:dish_keycard>,
													[[<galacticraftcore:basic_item:8>, <galacticraftcore:basic_item:11>, <galacticraftcore:basic_item:8>],
													[<galacticraftcore:basic_item:14>, <galacticraftcore:basic_item:19>, <galacticraftcore:basic_item:14>],
													[<galacticraftcore:basic_item:8>, <galacticraftcore:basic_item:11>, <galacticraftcore:basic_item:8>]]);
													
// More info regarding PlanetProgression
<galacticraftcore:rocket_t1>.addTooltip(format.aqua("Discover new planets & moons using the Satellite Controller & Telescope"));
<galacticraftcore:rocket_t1>.addTooltip(format.green("Pre-Launch Checklist is recommended"));
<galacticraftcore:rocket_t1:1>.addTooltip(format.aqua("Discover new planets & moons using the Satellite Controller & Telescope"));
<galacticraftcore:rocket_t1:1>.addTooltip(format.green("Pre-Launch Checklist is recommended"));
<galacticraftcore:rocket_t1:2>.addTooltip(format.aqua("Discover new planets & moons using the Satellite Controller & Telescope"));
<galacticraftcore:rocket_t1:2>.addTooltip(format.green("Pre-Launch Checklist is recommended"));
<galacticraftcore:rocket_t1:3>.addTooltip(format.aqua("Discover new planets & moons using the Satellite Controller & Telescope"));
<galacticraftcore:rocket_t1:3>.addTooltip(format.green("Pre-Launch Checklist is recommended"));

<galacticraftcore:dishbase>.addTooltip(format.green("Connect to a Satellite Controller using the Keycard"));

<planetprogression:satellite_module_basic>.displayName = "Satellite Module";
<planetprogression:satellite_basic>.displayName = "Satellite";

// Galacticraft Pre-Launch Checklist reasonable recipe
recipes.removeShapeless(<galacticraftcore:prelaunch_checklist>);
recipes.addShapeless(<galacticraftcore:prelaunch_checklist>,
													[<galacticraftcore:canvas>, <minecraft:dye:6>]);
													
// Buildcraft add more 1.12.2-relevant info
<buildcraftbuilders:quarry>.addTooltip(format.green("Uses MJ power only; Energy Converters mod is optional"));

// Add a furnace recipe for Galacticraft's silicon ore
furnace.addRecipe(<galacticraftcore:basic_item:2>, <galacticraftcore:basic_block_core:8>);

// Remove problematic IC2 chunk loader
mods.jei.JEI.removeAndHide(<ic2:te:82>);

// Add hint for the crystal
mods.jei.JEI.addDescription(<jexclusives:crystal>, "They say some crystals can be found wandering the dry deserts...");

// Fix Railcraft's Electric Locomotive recipe
recipes.removeByRecipeName("railcraft:locomotive_electric#0$1");
recipes.addShaped(<railcraft:locomotive_electric>,
													[[<minecraft:redstone_lamp>, oreDict.plateSteel, null],
													[<railcraft:charge:5>, oreDict.blockChargeBatteryRechargeable, <railcraft:charge:5>],
													[oreDict.gearSteel,  <minecraft:minecart>, oreDict.gearSteel]]);
													
// Fix Advanced Machines' Thermal Washer recipe
recipes.remove(<advanced_machines:machines:7>);
recipes.addShaped(<advanced_machines:machines:7>,
													[[oreDict.dustSulfur, oreDict.dustSulfur, oreDict.dustSulfur],
													[oreDict.dustSulfur, <ic2:te:56>, oreDict.dustSulfur],
													[oreDict.dustSulfur,  <ic2:resource:13>, oreDict.dustSulfur]]);
													
// Prevent conflict with Growthcraft Bee Box
recipes.removeByRecipeName("growthcraft_bees:beebox");
recipes.addShaped(<growthcraft_bees:beebox>,
													[[null, oreDict.plankWood, null],
													[oreDict.plankWood, null, oreDict.plankWood],
													[oreDict.stickWood,  oreDict.plankWood, oreDict.stickWood]]);
													
// Add ore dict to Railcraft's Block of Coal Coke
val oreDictBlockCoalCoke = <ore:blockCoalCoke>;
oreDictBlockCoalCoke.add(<railcraft:coke_block>);

// Remove Galacticraft "lead" from ore dictionary to highlight progression & avoid confusion
val oreDictIngotLead = <ore:ingotLead>;
val oreDictBlockLead = <ore:blockLead>;
val oreDictOreLead = <ore:oreLead>;
oreDictIngotLead.remove(<galacticraftplanets:basic_item_venus:1>);
oreDictBlockLead.remove(<galacticraftplanets:venus:12>);
oreDictOreLead.remove(<galacticraftplanets:venus:8>);

// Remove duplicate colored wool recipes due to Quark
recipes.removeByRecipeName("minecraft:orange_wool");
recipes.removeByRecipeName("minecraft:magenta_wool");
recipes.removeByRecipeName("minecraft:light_blue_wool");
recipes.removeByRecipeName("minecraft:yellow_wool");
recipes.removeByRecipeName("minecraft:lime_wool");
recipes.removeByRecipeName("minecraft:pink_wool");
recipes.removeByRecipeName("minecraft:gray_wool");
recipes.removeByRecipeName("minecraft:light_gray_wool");
recipes.removeByRecipeName("minecraft:cyan_wool");
recipes.removeByRecipeName("minecraft:purple_wool");
recipes.removeByRecipeName("minecraft:blue_wool");
recipes.removeByRecipeName("minecraft:brown_wool");
recipes.removeByRecipeName("minecraft:green_wool");
recipes.removeByRecipeName("minecraft:red_wool");
recipes.removeByRecipeName("minecraft:black_wool");
recipes.removeByRecipeName("minecraft:purple_shulker_box");

// Fix seed oil compatibility (alongside UniQ)
mods.thermalexpansion.CompressionDynamo.addFuel(<liquid:seed.oil>, 80000);

// Add Yellorium casting & melting compatibility
mods.tconstruct.Casting.addTableRecipe(<bigreactors:ingotyellorium>, <tconstruct:cast_custom:0>, <liquid:yellorium>, 144);
mods.tconstruct.Casting.addBasinRecipe(<bigreactors:blockyellorium>, <bigreactors:blockyellorium>, <liquid:yellorium>, 1296);
mods.tconstruct.Melting.addRecipe(<liquid:yellorium> * 144, <bigreactors:ingotyellorium>);
mods.tconstruct.Melting.addRecipe(<liquid:yellorium> * 1296, <bigreactors:blockyellorium>);
mods.tconstruct.Melting.addRecipe(<liquid:yellorium> * 288, <bigreactors:oreyellorite>);
mods.tconstruct.Melting.addRecipe(<liquid:yellorium> * 576, <netherendingores:ore_nether_modded_1:13>);