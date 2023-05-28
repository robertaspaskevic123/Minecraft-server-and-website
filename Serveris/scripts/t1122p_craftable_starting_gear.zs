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

					 === t1122p_craftable_starting_gear ===							*/

import crafttweaker.item.IIngredient;
import crafttweaker.item.IItemStack;
import crafttweaker.oredict.IOreDict;
import crafttweaker.oredict.IOreDictEntry;
					 
// Craftable Patchouli guide
var startingGuide = <patchouli:guide_book>.withTag({"patchouli:book": "patchouli:the1122pack-guide"});
recipes.addShapeless(startingGuide, [<jexclusives:crystal>, <minecraft:book>]);

// Craftable (full) Akashic Tome
var startingTome = <akashictome:tome>.withTag(
	{"akashictome:data": {
		industrialforegoing: {id: "industrialforegoing:book_manual", Count: 1 as byte, tag: {"akashictome:definedMod": "industrialforegoing"}, Damage: 0 as short}, 
		tconstruct: {id: "tconstruct:book", Count: 1 as byte, tag: {"akashictome:definedMod": "tconstruct"}, Damage: 0 as short}, 
		buildcraftlib: {id: "buildcraftlib:guide", Count: 1 as byte, tag: {"akashictome:definedMod": "buildcraftlib"}, Damage: 0 as short}, 
		conarm: {id: "conarm:book", Count: 1 as byte, tag: {"akashictome:definedMod": "conarm"}, Damage: 0 as short}, 
		pneumaticcraft: {id: "patchouli:guide_book", Count: 1 as byte, tag: {"akashictome:definedMod": "pneumaticcraft", "patchouli:book": "pneumaticcraft:book"}, Damage: 0 as short}, 
		gbook: {id: "gbook:guidebook", Count: 1 as byte, tag: {"akashictome:definedMod": "gbook", Book: "ltta:xml/ltta.xml"}, Damage: 0 as short},
		modularrouters: {id: "guideapi:modularrouters-guidebook", Count: 1 as byte, tag: {"akashictome:definedMod": "modularrouters"}, Damage: 0 as short}, 
		botania: {id: "botania:lexicon", Count: 1 as byte, tag: {"akashictome:definedMod": "botania"}, Damage: 0 as short}, 
		extrautils2: {id: "extrautils2:book", Count: 1 as byte, tag: {"akashictome:definedMod": "extrautils2"}, Damage: 0 as short}, 
		thermalfoundation: {id: "thermalfoundation:tome_lexicon", Count: 1 as byte, tag: {"akashictome:definedMod": "thermalfoundation"}, Damage: 0 as short}, 
		bloodmagic: {id: "guideapi:bloodmagic-guide", Count: 1 as byte, tag: {"akashictome:definedMod": "bloodmagic"}, Damage: 0 as short}, 
		opencomputers: {id: "opencomputers:tool", Count: 1 as byte, tag: {"akashictome:definedMod": "opencomputers"}, Damage: 4 as short}, 
		twilightforest: {id: "patchouli:guide_book", Count: 1 as byte, tag: {"akashictome:definedMod": "twilightforest", "patchouli:book": "twilightforest:guide"}, Damage: 0 as short}, 
		forestry: {id: "forestry:book_forester", Count: 1 as byte, tag: {"akashictome:definedMod": "forestry"}, Damage: 0 as short}, 
		bigreactors: {id: "patchouli:guide_book", Count: 1 as byte, tag: {"akashictome:definedMod": "bigreactors", "patchouli:book": "bigreactors:erguide"}, Damage: 0 as short}, 
		logisticspipes: {id: "logisticspipes:guide_book", Count: 1 as byte, tag: {"akashictome:definedMod": "logisticspipes"}, Damage: 0 as short},
		openblocks: {id: "openblocks:info_book", Count: 1 as byte, tag: {"akashictome:definedMod": "openblocks"}, Damage: 0 as short}}});

startingTome.addTooltip(format.aqua("Craftable with all of the mod guides inside"));
mods.jei.JEI.addItem(startingTome);
recipes.addShapeless(startingTome, [<jexclusives:crystal>, oreDict.bookshelf]);