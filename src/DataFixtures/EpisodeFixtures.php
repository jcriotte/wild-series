<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
  const EPISODES = [
    [
      "season_id" => 1,
      "title" => "Unaired Pilot",
      "number" => 0,
      "synopsis" => "The first Pilot of what will become The Big Bang Theory. Leonard and Sheldon are two awkward scientists who share an apartment. They meet a drunk girl called Katie and invite her to stay at their place, because she has nowhere to stay. The two guys have a female friend, also a scientist, called Gilda.    ",
      "slug" => "episode1"
    ],
    [
      "season_id" => 1,
      "title" => "Pilot",
      "number" => 1,
      "synopsis" => "A pair of socially awkward theoretical physicists meet their new neighbor Penny, who is their polar opposite.",
      "slug" => "episode2"
    ],
    [
      "season_id" => 1,
      "title" => "The Big Bran Hypothesis",
      "number" => 2,
      "synopsis" => "Penny is furious with Leonard and Sheldon when they sneak into her apartment and clean it while she is sleeping.    ",
      "slug" => "episode3"
    ],
    [
      "season_id" => 1,
      "title" => "The Fuzzy Boots Corollary",
      "number" => 3,
      "synopsis" => "Leonard gets upset when he discovers that Penny is seeing a new guy, so he tries to trick her into going on a date with him.    ",
      "slug" => "episode4"
    ],
    [
      "season_id" => 1,
      "title" => "The Luminous Fish Effect",
      "number" => 4,
      "synopsis" => "Sheldon's mother is called to intervene when he delves into numerous obsessions after being fired for being disrespectful to his new boss.    ",
      "slug" => "episode5"
    ],
    [
      "season_id" => 1,
      "title" => "The Hamburger Postulate",
      "number" => 5,
      "synopsis" => "Leslie seduces Leonard, but afterwards tells him that she is only interested in a one-night stand.    ",
      "slug" => "episode6"
    ],
    [
      "season_id" => 1,
      "title" => "The Middle Earth Paradigm",
      "number" => 6,
      "synopsis" => "The guys are invited to Penny's Halloween party, where Leonard has yet another run-in with Penny's ex-boyfriend Kurt.    ",
      "slug" => "episode7"
    ],
    [
      "season_id" => 1,
      "title" => "The Dumpling Paradox",
      "number" => 7,
      "synopsis" => "When Howard hooks up with Penny's old friend, his absence in the gang causes problems for the rest of the guys.    ",
      "slug" => "episode8"
    ],
    [
      "season_id" => 1,
      "title" => "The Grasshopper Experiment",
      "number" => 8,
      "synopsis" => "When Raj's parents set him up on a blind date, he finds he can talk to women with the aid of alcohol.",
      "slug" => "episode9"
    ],
    [
      "season_id" => 1,
      "title" => "The Cooper-Hofstadter Polarization",
      "number" => 9,
      "synopsis" => "Leonard and Sheldon's friendship is put to the test when Leonard wants to present a paper they co-authored at a physics convention, but Sheldon doesn't.",
      "slug" => "episode10"
    ],
    [
      "season_id" => 1,
      "title" => "The Loobenfeld Decay",
      "number" => 10,
      "synopsis" => "Leonard lies to Penny so that he and Sheldon can get out of watching her perform. However, Sheldon believes that the lie has too many loose ends, so he comes up with a new, unnecessarily complex one to replace it.    ",
      "slug" => "episode11"
    ],
    [
      "season_id" => 1,
      "title" => "The Pancake Batter Anomaly",
      "number" => 11,
      "synopsis" => "When Sheldon gets sick, Leonard, Howard and Raj go AWOL, leaving a reluctant Penny to deal with him.",
      "slug" => "episode12"
    ],
    [
      "season_id" => 1,
      "title" => "The Jerusalem Duality",
      "number" => 12,
      "synopsis" => "Sheldon decides to give up his work and focus on other tasks when a 15-year-old prodigy joins the university, so the other guys come up with a plan to get rid of him.",
      "slug" => "episode13"
    ],
    [
      "season_id" => 1,
      "title" => "The Bat Jar Conjecture",
      "number" => 13,
      "synopsis" => "Sheldon becomes so intent on demonstrating his intellectual superiority over the other guys that they kick him off the Physics Bowl team and replace him with his nemesis, Leslie.",
      "slug" => "episode14"
    ],
    [
      "season_id" => 1,
      "title" => "The Nerdvana Annihilation",
      "number" => 14,
      "synopsis" => "Penny gets mad at the guys when their full scale model of a time machine causes her to miss work, which prompts Leonard to give up all of his nerd memorabilia.",
      "slug" => "episode15"
    ],
    [
      "season_id" => 1,
      "title" => "The Pork Chop Indeterminacy",
      "number" => 15,
      "synopsis" => "Leonard, Howard and Raj fight over Sheldon's twin sister when she arrives in town. Raj takes part in a drug trial to suppress his selective mutism.",
      "slug" => "episode16"
    ],
    [
      "season_id" => 1,
      "title" => "The Peanut Reaction",
      "number" => 16,
      "synopsis" => "When Penny learns that Leonard has never had a birthday party, she and the rest of the guys plan a surprise party for him.",
      "slug" => "episode17"
    ],
    [
      "season_id" => 1,
      "title" => "The Tangerine Factor",
      "number" => 17,
      "synopsis" => "After a bad breakup, Penny finally agrees to go out on a date with Leonard, however they both develop doubts and turn to Sheldon for advice.",
      "slug" => "episode18"
    ],
    [
      "season_id" => 2,
      "title" => "The Bad Fish Paradigm",
      "number" => 1,
      "synopsis" => "Leonard becomes concerned when his date with Penny ends abruptly and she starts blowing him off. When told the truth, Sheldon would rather move out than keep Penny's reasons a secret from Leonard.",
      "slug" => "episode19"
    ],
    [
      "season_id" => 2,
      "title" => "The Codpiece Topology",
      "number" => 2,
      "synopsis" => "Sheldon is annoyed when Leonard turns to Leslie for comfort after seeing Penny with another guy.",
      "slug" => "episode20"
    ],
    [
      "season_id" => 2,
      "title" => "The Barbarian Sublimation",
      "number" => 3,
      "synopsis" => "Sheldon introduces Penny to online gaming, however she refuses to quit after becoming addicted.",
      "slug" => "episode21"
    ],
    [
      "season_id" => 2,
      "title" => "The Griffin Equivalency",
      "number" => 4,
      "synopsis" => "The guys struggle to cope with Raj's arrogance after he is featured in a People magazine article.",
      "slug" => "episode22"
    ],
    [
      "season_id" => 2,
      "title" => "The Euclid Alternative",
      "number" => 5,
      "synopsis" => "Sheldon annoys the gang when Leonard can't drive him to and from work, so they try to teach him how to drive.",
      "slug" => "episode23"
    ],
    [
      "season_id" => 2,
      "title" => "The Cooper-Nowitzki Theorem",
      "number" => 6,
      "synopsis" => "Sheldon is flattered when a graduate student takes a shine to him, however her extreme devotion becomes too much to handle.",
      "slug" => "episode24"
    ],
    [
      "season_id" => 2,
      "title" => "The Panty Piñata Polarization",
      "number" => 7,
      "synopsis" => "Penny plans revenge when Sheldon bans her from his and Leonards apartment, while Howard and Raj use the latest technology to try to find the house being used in America's Next Top Model.",
      "slug" => "episode25"
    ],
    [
      "season_id" => 2,
      "title" => "The Lizard-Spock Expansion",
      "number" => 8,
      "synopsis" => "Leonard and Howard's friendship is jeopardised when Leonard steals a girl from Howard.",
      "slug" => "episode26"
    ],
    [
      "season_id" => 2,
      "title" => "The White Asparagus Triangulation",
      "number" => 9,
      "synopsis" => "Sheldon believes that Leonard will wreck his relationship with Stephanie, so he decides to take matters into his own hands.",
      "slug" => "episode27"
    ],
    [
      "season_id" => 2,
      "title" => "The Vartabedian Conundrum",
      "number" => 10,
      "synopsis" => "Leonard tries to slow down his relationship with Stephanie when he realizes that they are living together, while Sheldon becomes convinced that he has an untraceable disease.",
      "slug" => "episode28"
    ],
    [
      "season_id" => 2,
      "title" => "The Bath Item Gift Hypothesis",
      "number" => 11,
      "synopsis" => "Leonard is disappointed when Penny develops an interest in an attractive physicist at the university. Meanwhile, Sheldon struggles to find an appropriate Christmas gift for Penny.",
      "slug" => "episode29"
    ],
    [
      "season_id" => 2,
      "title" => "The Killer Robot Instability",
      "number" => 12,
      "synopsis" => "Howard becomes depressed after Penny makes a cruel statement about his love life, while the rest of the guys prepare for a grudge killer robot duel against an obnoxious colleague at the university.",
      "slug" => "episode30"
    ],
    [
      "season_id" => 2,
      "title" => "The Friendship Algorithm",
      "number" => 13,
      "synopsis" => "Sheldon tries to make friends with Kripke in the hope that it will get him access to a coveted computer at the university.",
      "slug" => "episode31"
    ],
    [
      "season_id" => 2,
      "title" => "The Financial Permeability",
      "number" => 14,
      "synopsis" => "Leonard and Sheldon try to help out Penny when she can't afford to pay her rent.",
      "slug" => "episode32"
    ],
    [
      "season_id" => 2,
      "title" => "The Maternal Capacitance",
      "number" => 15,
      "synopsis" => "Sheldon hits it off with Leonard's psychoanalyst mother, but she drives Leonard and Penny to the bottle.",
      "slug" => "episode33"
    ],
    [
      "season_id" => 2,
      "title" => "The Cushion Saturation",
      "number" => 16,
      "synopsis" => "Howard hooks up with Leslie, while Penny accidentally ruins Sheldon's spot on the couch.",
      "slug" => "episode34"
    ],
    [
      "season_id" => 2,
      "title" => "The Terminator Decoupling",
      "number" => 17,
      "synopsis" => "On a train to San Francisco, Howard, Raj and Leonard fight for the affections of sci-fi star Summer Glau, while Sheldon is forced to turn to Penny for help when he leaves his flash drive behind.",
      "slug" => "episode35"
    ],
    [
      "season_id" => 2,
      "title" => "The Work Song Nanocluster",
      "number" => 18,
      "synopsis" => "Sheldon's assistance with Penny's home-based business leads to chaos.",
      "slug" => "episode36"
    ],
    [
      "season_id" => 2,
      "title" => "The Dead Hooker Juxtaposition",
      "number" => 19,
      "synopsis" => "Penny becomes jealous when a gorgeous new neighbor attracts the guys' attention.",
      "slug" => "episode37"
    ],
    [
      "season_id" => 2,
      "title" => "The Hofstadter Isotope",
      "number" => 20,
      "synopsis" => "Leonard is upset when the owner of the comic book store goes on a date with Penny, so he convinces Howard and Raj to take him to a bar so that he can pick up a woman of his own.",
      "slug" => "episode38"
    ],
    [
      "season_id" => 2,
      "title" => "The Vegas Renormalization",
      "number" => 21,
      "synopsis" => "After being dumped by Leslie, Howard heads to Las Vegas with Leonard and Raj. Meanwhile, Penny is forced to take in Sheldon after he locks himself out of his apartment.",
      "slug" => "episode39"
    ],
    [
      "season_id" => 2,
      "title" => "The Classified Materials Turbulence",
      "number" => 22,
      "synopsis" => "Penny's second date with Stuart has significant implications for Leonard. Howard enlists the guys' help with one of his NASA projects.",
      "slug" => "episode40"
    ],
    [
      "season_id" => 2,
      "title" => "The Monopolar Expedition",
      "number" => 23,
      "synopsis" => "Penny gets upset when she finds out Leonard and the guys plan to work at the North Pole for the summer.",
      "slug" => "episode41"
    ],
    [
      "season_id" => 3,
      "title" => "The Electric Can Opener Fluctuation",
      "number" => 1,
      "synopsis" => "After returning from the North Pole, a conflict among the guys sends Sheldon back to Texas and interferes with Leonard's reunion with Penny.",
      "slug" => "episode42"
    ],
    [
      "season_id" => 3,
      "title" => "The Jiminy Conjecture",
      "number" => 2,
      "synopsis" => "Leonard and Penny's first night together goes awkwardly. Sheldon and Howard wager on the species of a cricket.",
      "slug" => "episode43"
    ],
    [
      "season_id" => 3,
      "title" => "The Gothowitz Deviation",
      "number" => 3,
      "synopsis" => "Sheldon attempts to covertly alter Penny's habits, while Howard and Raj try their luck meeting women at a Goth-style club.",
      "slug" => "episode44"
    ],
    [
      "season_id" => 3,
      "title" => "The Pirate Solution",
      "number" => 4,
      "synopsis" => "When Raj has to find a new job or be sent back to India, Sheldon's solution leaves Leonard and Penny dealing with Howard as the third wheel.",
      "slug" => "episode45"
    ],
    [
      "season_id" => 3,
      "title" => "The Creepy Candy Coating Corollary",
      "number" => 5,
      "synopsis" => "Leonard is forced to ask Penny to set Howard up with one of her friends, while Sheldon seeks payback against sci-fi star Wil Wheaton.",
      "slug" => "episode46"
    ],
    [
      "season_id" => 3,
      "title" => "The Cornhusker Vortex",
      "number" => 6,
      "synopsis" => "Leonard tries to learn about football to fit in with Penny's friends. Meanwhile, a loss in a kite war threatens to end Raj and Howard's friendship.",
      "slug" => "episode47"
    ],
    [
      "season_id" => 3,
      "title" => "The Guitarist Amplification",
      "number" => 7,
      "synopsis" => "Sheldon is caught in the middle when Leonard and Penny argue about Penny's friend staying at her apartment.",
      "slug" => "episode48"
    ],
    [
      "season_id" => 3,
      "title" => "The Adhesive Duck Deficiency",
      "number" => 8,
      "synopsis" => "Penny is forced to turn to Sheldon for help when she dislocates her shoulder in the bathtub. Meanwhile, the rest of the guys accidentally get stoned in the desert while waiting for a meteor shower.",
      "slug" => "episode49"
    ],
    [
      "season_id" => 3,
      "title" => "The Vengeance Formulation",
      "number" => 9,
      "synopsis" => "Sheldon plans revenge after Kripke humiliates him on the radio. Howard develops doubts about his relationship with Bernadette.",
      "slug" => "episode50"
    ],
    [
      "season_id" => 3,
      "title" => "The Gorilla Experiment",
      "number" => 10,
      "synopsis" => "Sheldon attempts to help Penny understand physics to impress Leonard, while Howard becomes jealous when Bernadette takes an interest in Leonard's research.",
      "slug" => "episode51"
    ],
    [
      "season_id" => 3,
      "title" => "The Maternal Congruence",
      "number" => 11,
      "synopsis" => "Leonard's mother makes a visit to his dismay and Sheldon's delight.",
      "slug" => "episode52"
    ],
    [
      "season_id" => 3,
      "title" => "The Psychic Vortex",
      "number" => 12,
      "synopsis" => "Raj talks Sheldon into being his wingman at a university mixer. Leonard has trouble dealing with Penny consulting a psychic.",
      "slug" => "episode53"
    ],
    [
      "season_id" => 3,
      "title" => "The Bozeman Reaction",
      "number" => 13,
      "synopsis" => "When their apartment is robbed, Leonard and Sheldon turn to Howard and Raj to create a state-of-the-art security system.",
      "slug" => "episode54"
    ],
    [
      "season_id" => 3,
      "title" => "The Einstein Approximation",
      "number" => 14,
      "synopsis" => "Sheldon wreaks havoc when he is stumped by a difficult physics question.",
      "slug" => "episode55"
    ],
    [
      "season_id" => 3,
      "title" => "The Large Hadron Collision",
      "number" => 15,
      "synopsis" => "When Leonard is offered a trip to Switzerland on Valentine's Day to visit the CERN laboratory, Sheldon uses any and all means to be his guest instead of Penny.",
      "slug" => "episode56"
    ],
    [
      "season_id" => 3,
      "title" => "The Excelsior Acquisition",
      "number" => 16,
      "synopsis" => "Sheldon misses an opportunity to get Stan Lee's autograph because he has to make an appearance in traffic court.",
      "slug" => "episode57"
    ],
    [
      "season_id" => 3,
      "title" => "The Precious Fragmentation",
      "number" => 17,
      "synopsis" => "The guys' friendship is threatened when they find a ring from the Lord of the Rings trilogy.",
      "slug" => "episode58"
    ],
    [
      "season_id" => 3,
      "title" => "The Pants Alternative",
      "number" => 18,
      "synopsis" => "Sheldon seeks help from the rest of the gang in overcoming his fear of public speaking when he receives an award.",
      "slug" => "episode59"
    ],
    [
      "season_id" => 3,
      "title" => "The Wheaton Recurrence",
      "number" => 19,
      "synopsis" => "Sheldon takes on Wil Wheaton in a game of bowling. Leonard and Penny's relationship comes to a crossroad.",
      "slug" => "episode60"
    ],
    [
      "season_id" => 3,
      "title" => "The Spaghetti Catalyst",
      "number" => 20,
      "synopsis" => "Sheldon is forced to go behind Leonard's back to spend time with Penny following their breakup.",
      "slug" => "episode61"
    ],
    [
      "season_id" => 3,
      "title" => "The Plimpton Stimulation",
      "number" => 21,
      "synopsis" => "Chaos ensues when a nymphomaniac physicist visiting Sheldon hooks up with Leonard.",
      "slug" => "episode62"
    ],
    [
      "season_id" => 3,
      "title" => "The Staircase Implementation",
      "number" => 22,
      "synopsis" => "Leonard tells Penny about how he and Sheldon became roommates and what happened to the elevator.",
      "slug" => "episode63"
    ],
    [
      "season_id" => 3,
      "title" => "The Lunar Excitation",
      "number" => 23,
      "synopsis" => "Penny has a night of angry, drunken sex with Leonard, much to his confusion. Meanwhile, Howard and Raj search for Sheldon's perfect match online.",
      "slug" => "episode64"
    ],
    [
      "season_id" => 4,
      "title" => "The Robotic Manipulation",
      "number" => 1,
      "synopsis" => "Penny ends up tagging along on Sheldon's first ever date with Amy, while Howard finds an unusual use for a robotic arm.",
      "slug" => "episode65"
    ],
    [
      "season_id" => 4,
      "title" => "The Cruciferous Vegetable Amplification",
      "number" => 2,
      "synopsis" => "When Sheldon calculates the technology to download his consciousness into a robot won't be invented soon enough, he desperately tries to find a way to increase his lifespan.",
      "slug" => "episode66"
    ],
    [
      "season_id" => 4,
      "title" => "The Zazzy Substitution",
      "number" => 3,
      "synopsis" => "Following his 'breakup' with Amy, the gang become concerned with Sheldon's obsessive search for non-human companionship and call his mother to intervene.",
      "slug" => "episode67"
    ],
    [
      "season_id" => 4,
      "title" => "The Hot Troll Deviation",
      "number" => 4,
      "synopsis" => "Howard tries to get Penny's help in winning back Bernadette, but first has to confess the embarrassing reason why they broke up in the first place. Raj and Sheldon clash over a desk.",
      "slug" => "episode68"
    ],
    [
      "season_id" => 4,
      "title" => "The Desperation Emanation",
      "number" => 5,
      "synopsis" => "Sheldon is scared that he is in a relationship when Amy asks him to meet her mother, and Leonard asks Howard and Bernadette to set him up because he is the only person in the group without a girlfriend.",
      "slug" => "episode69"
    ],
    [
      "season_id" => 4,
      "title" => "The Irish Pub Formulation",
      "number" => 6,
      "synopsis" => "Leonard tries to keep everyone from finding out that he spent the night with Raj's sister, but Sheldon finds out and concocts an elaborate story to help him keep the secret from Raj.",
      "slug" => "episode70"
    ],
    [
      "season_id" => 4,
      "title" => "The Apology Insufficiency",
      "number" => 7,
      "synopsis" => "An FBI agent interviews the guys when Howard needs to obtain a security clearance.",
      "slug" => "episode71"
    ],
    [
      "season_id" => 4,
      "title" => "The 21-Second Excitation",
      "number" => 8,
      "synopsis" => "The guys camp out all night waiting to see an extended cut of Indiana Jones, while Amy joins in on girls' night with Penny and Bernadette.",
      "slug" => "episode72"
    ],
    [
      "season_id" => 4,
      "title" => "The Boyfriend Complexity",
      "number" => 9,
      "synopsis" => "Penny asks Leonard to pose as her boyfriend when her father visits. Howard, Raj and Bernadette have an awkward encounter when they spend the evening together.",
      "slug" => "episode73"
    ],
    [
      "season_id" => 4,
      "title" => "The Alien Parasite Hypothesis",
      "number" => 10,
      "synopsis" => "Amy finds she has sexual feelings for Penny's ex-boyfriend Zack, while Raj and Howard try to prove who would be the better superhero.",
      "slug" => "episode74"
    ],
    [
      "season_id" => 4,
      "title" => "The Justice League Recombination",
      "number" => 11,
      "synopsis" => "The guys enter a costume contest as members of the Justice League and convince Penny and Zack to join them.",
      "slug" => "episode75"
    ],
    [
      "season_id" => 4,
      "title" => "The Bus Pants Utilization",
      "number" => 12,
      "synopsis" => "Leonard has an idea for a new smartphone app and asks the guys for help, however Sheldon tries to take over the project, and Leonard fires him.",
      "slug" => "episode76"
    ],
    [
      "season_id" => 4,
      "title" => "The Love Car Displacement",
      "number" => 13,
      "synopsis" => "Chaos ensues when the gang spend the weekend together at a science convention.",
      "slug" => "episode77"
    ],
    [
      "season_id" => 4,
      "title" => "The Thespian Catalyst",
      "number" => 14,
      "synopsis" => "To improve his skills as an instructor, Sheldon asks Penny to give him acting lessons. Meanwhile, Raj begins having impure fantasies about Bernadette.",
      "slug" => "episode78"
    ],
    [
      "season_id" => 4,
      "title" => "The Benefactor Factor",
      "number" => 15,
      "synopsis" => "To secure needed funding for the university, Sheldon convinces Leonard to get friendly with a wealthy benefactor.",
      "slug" => "episode79"
    ],
    [
      "season_id" => 4,
      "title" => "The Cohabitation Formulation",
      "number" => 16,
      "synopsis" => "Bernadette makes Howard choose between herself and his mother, while Penny and Raj become upset when Priya returns to town and resumes her relationship with Leonard.",
      "slug" => "episode80"
    ],
    [
      "season_id" => 4,
      "title" => "The Toast Derivation",
      "number" => 17,
      "synopsis" => "Sheldon becomes concerned when everybody begins to hang out at Raj's apartment and discovers Leonard is the center of the group.",
      "slug" => "episode81"
    ],
    [
      "season_id" => 4,
      "title" => "The Prestidigitation Approximation",
      "number" => 18,
      "synopsis" => "Priya forces Leonard to choose between a relationship with her or a friendship with Penny. A magic trick by Howard has Sheldon fooled.",
      "slug" => "episode82"
    ],
    [
      "season_id" => 4,
      "title" => "The Zarnecki Incursion",
      "number" => 19,
      "synopsis" => "The guys go all out to help Sheldon find the person responsible for hacking his online gaming account, while the girls' hatred for Priya increases.",
      "slug" => "episode83"
    ],
    [
      "season_id" => 4,
      "title" => "The Herb Garden Germination",
      "number" => 20,
      "synopsis" => "Sheldon and Amy secretly experiment on the gang by spreading rumors when they hear that Bernadette is thinking about breaking up with Howard.",
      "slug" => "episode84"
    ],
    [
      "season_id" => 4,
      "title" => "The Agreement Dissection",
      "number" => 21,
      "synopsis" => "When Priya finds a loophole in the roommate agreement to throw Sheldon out for the night, Penny, Amy and Bernadette take him to a nightclub.",
      "slug" => "episode85"
    ],
    [
      "season_id" => 4,
      "title" => "The Wildebeest Implementation",
      "number" => 22,
      "synopsis" => "Sheldon invents a three-player chess game, Penny and Amy use Bernadette to spy on Leonard and Priya, and Raj tries a new drug to treat his social anxiety.",
      "slug" => "episode86"
    ],
    [
      "season_id" => 4,
      "title" => "The Engagement Reaction",
      "number" => 23,
      "synopsis" => "Howard believes that his mom suffered a heart attack because he told her that he's marrying Bernadette, Sheldon freaks out over germs, and Penny and Priya compare notes on Leonard.",
      "slug" => "episode87"
    ],
    [
      "season_id" => 4,
      "title" => "The Roommate Transmogrification",
      "number" => 24,
      "synopsis" => "Raj moves in with Sheldon after hearing Leonard and Priya engage in a Star Trek fantasy in his apartment. Bernadette receives her doctorate.",
      "slug" => "episode88"
    ],
    [
      "season_id" => 5,
      "title" => "The Skank Reflex Analysis",
      "number" => 1,
      "synopsis" => "The gang deal with the fallout from Penny and Raj's night together.",
      "slug" => "episode89"
    ],
    [
      "season_id" => 5,
      "title" => "The Infestation Hypothesis",
      "number" => 2,
      "synopsis" => "Amy gets inadvertently caught in the middle of a fight between Sheldon and Penny over a chair. Leonard tries to add some spice to his long-distance relationship with Priya.",
      "slug" => "episode90"
    ],
    [
      "season_id" => 5,
      "title" => "The Pulled Groin Extrapolation",
      "number" => 3,
      "synopsis" => "Leonard accompanies Amy to a colleague's wedding. Howard tries to convince Bernadette to live with his mother after they get married.",
      "slug" => "episode91"
    ],
    [
      "season_id" => 5,
      "title" => "The Wiggly Finger Catalyst",
      "number" => 4,
      "synopsis" => "Penny sets up Raj with a deaf friend, not knowing that she's actually a gold digger, and Sheldon decides to let his minor decisions rest on the roll of the dice.",
      "slug" => "episode92"
    ],
    [
      "season_id" => 5,
      "title" => "The Russian Rocket Reaction",
      "number" => 5,
      "synopsis" => "Sheldon takes offense when Leonard wants to attend a party with Wil Wheaton, while Bernadette tries to block Howard's opportunity to go into outer space.",
      "slug" => "episode93"
    ],
    [
      "season_id" => 5,
      "title" => "The Rhinitis Revelation",
      "number" => 6,
      "synopsis" => "Sheldon gets upset when his mother comes to visit but refuses to cook for him and attend physics lectures.",
      "slug" => "episode94"
    ],
    [
      "season_id" => 5,
      "title" => "The Good Guy Fluctuation",
      "number" => 7,
      "synopsis" => "Sheldon tries to get into the spirit of Halloween by trying to scare the guys after they prank him. Leonard seeks Penny's advice when an attractive comic book artist takes an interest in him.",
      "slug" => "episode95"
    ],
    [
      "season_id" => 5,
      "title" => "The Isolation Permutation",
      "number" => 8,
      "synopsis" => "Amy is hurt when Penny and Bernadette go bridesmaid dress shopping without her, so she turns to a reluctant Sheldon for comfort.",
      "slug" => "episode96"
    ],
    [
      "season_id" => 5,
      "title" => "The Ornithophobia Diffusion",
      "number" => 9,
      "synopsis" => "Sheldon tries to overcome his fear of birds, while Leonard and Penny attempt to hang out together strictly as friends.",
      "slug" => "episode97"
    ],
    [
      "season_id" => 5,
      "title" => "The Flaming Spittoon Acquisition",
      "number" => 10,
      "synopsis" => "When Stuart asks Amy on a date, Sheldon considers having a more serious relationship with her. Meanwhile, the guys become obsessed with a new card game involving Wild West heroes and witches.",
      "slug" => "episode98"
    ],
    [
      "season_id" => 5,
      "title" => "The Speckerman Recurrence",
      "number" => 11,
      "synopsis" => "Leonard confronts the man who bullied him in high school, while Penny realizes she did her fair share of tormenting in the past.",
      "slug" => "episode99"
    ],
    [
      "season_id" => 5,
      "title" => "The Shiny Trinket Maneuver",
      "number" => 12,
      "synopsis" => "Penny helps Sheldon work on his relationship with Amy when he trivializes one of her accomplishments. Howard is irked by Bernadette's dislike of children.",
      "slug" => "episode100"
    ],
    [
      "season_id" => 5,
      "title" => "The Recombination Hypothesis",
      "number" => 13,
      "synopsis" => "Leonard and Penny contemplate reviving their romantic relationship.",
      "slug" => "episode101"
    ],
    [
      "season_id" => 5,
      "title" => "The Beta Test Initiation",
      "number" => 14,
      "synopsis" => "Leonard and Penny develop a system to ensure their dates go smoothly. Raj finally finds a woman he can talk to - the virtual assistant on his mobile phone.",
      "slug" => "episode102"
    ],
    [
      "season_id" => 5,
      "title" => "The Friendship Contraction",
      "number" => 15,
      "synopsis" => "Leonard signs out of his roommate agreement, reducing himself and Sheldon to mere acquaintances, while Howard tries to think of a cool astronaut nickname for himself.",
      "slug" => "episode103"
    ],
    [
      "season_id" => 5,
      "title" => "The Vacation Solution",
      "number" => 16,
      "synopsis" => "When the university forces Sheldon to use vacation days, he decides to hang out in Amy's lab. Howard becomes upset when he hears Bernadette wants him to sign a prenuptial agreement.",
      "slug" => "episode104"
    ],
    [
      "season_id" => 5,
      "title" => "The Rothman Disintegration",
      "number" => 17,
      "synopsis" => "Sheldon battles Kripke for a coveted office at the university. Penny receives a very unusual gift from Amy.",
      "slug" => "episode105"
    ],
    [
      "season_id" => 5,
      "title" => "The Werewolf Transformation",
      "number" => 18,
      "synopsis" => "Sheldon wreaks havoc when he tries to get a haircut from his regular barber, who is ill. Howard runs into a few problems with astronaut training.",
      "slug" => "episode106"
    ],
    [
      "season_id" => 5,
      "title" => "The Weekend Vortex",
      "number" => 19,
      "synopsis" => "Sheldon has to choose between joining Amy at her aunt's birthday party or playing videogames all weekend with the guys.",
      "slug" => "episode107"
    ],
    [
      "season_id" => 5,
      "title" => "The Transporter Malfunction",
      "number" => 20,
      "synopsis" => "Raj gets quite a surprise when he asks his parents to set him up on a date. Penny buys Leonard and Sheldon a pair of Star Trek keepsake collectibles.",
      "slug" => "episode108"
    ],
    [
      "season_id" => 5,
      "title" => "The Hawking Excitation",
      "number" => 21,
      "synopsis" => "Sheldon uses any and all means to meet his hero, Dr. Stephen Hawking.",
      "slug" => "episode109"
    ],
    [
      "season_id" => 5,
      "title" => "The Stag Convergence",
      "number" => 22,
      "synopsis" => "The guys throw Howard a bachelor party, and some embarrassing details about his life get posted on the Internet.",
      "slug" => "episode110"
    ],
    [
      "season_id" => 5,
      "title" => "The Launch Acceleration",
      "number" => 23,
      "synopsis" => "NASA cancel, and later reinstate Howard's mission into space, coinciding with his wedding. Leonard inadvertently jeopardizes his relationship with Penny.",
      "slug" => "episode111"
    ],
    [
      "season_id" => 5,
      "title" => "The Countdown Reflection",
      "number" => 24,
      "synopsis" => "As Howard prepares for his mission into space, flashbacks show the recent events leading up to his and Bernadette's wedding.",
      "slug" => "episode112"
    ],
    [
      "season_id" => 6,
      "title" => "The Date Night Variable",
      "number" => 1,
      "synopsis" => "Raj crashes Sheldon and Amy's second anniversary and interferes in Leonard and Penny's relationship. Howard gets caught in the middle of an argument between Bernadette and his mother.",
      "slug" => "episode113"
    ],
    [
      "season_id" => 6,
      "title" => "The Decoupling Fluctuation",
      "number" => 2,
      "synopsis" => "Penny continues to have doubts about her relationship with Leonard. Meanwhile, Howard becomes the target of practical jokes on the space station.",
      "slug" => "episode114"
    ],
    [
      "season_id" => 6,
      "title" => "The Higgs Boson Observation",
      "number" => 3,
      "synopsis" => "When Sheldon hires a female grad student to assist him, a jealous Amy asks Penny to help her spy on them. On the space station, Howard begins behaving erratically.",
      "slug" => "episode115"
    ],
    [
      "season_id" => 6,
      "title" => "The Re-Entry Minimization",
      "number" => 4,
      "synopsis" => "Howard is offended when his return from space is met with little fanfare. Penny and Amy take on Sheldon and Leonard during game night.",
      "slug" => "episode116"
    ],
    [
      "season_id" => 6,
      "title" => "The Holographic Excitation",
      "number" => 5,
      "synopsis" => "While Raj plans Stuart's Halloween party at the comic book store, Howard annoys the rest of the gang by constantly talking about space, and Penny tries to take more of an interest in Leonard's work.",
      "slug" => "episode117"
    ],
    [
      "season_id" => 6,
      "title" => "The Extract Obliteration",
      "number" => 6,
      "synopsis" => "Penny enrolls in a college class and keeps it a secret from Leonard. Sheldon causes conflict with Dr. Stephen Hawking over an online game.",
      "slug" => "episode118"
    ],
    [
      "season_id" => 6,
      "title" => "The Habitation Configuration",
      "number" => 7,
      "synopsis" => "Howard makes a decision whether or not to move out of his mother's house, while Sheldon is caught in the middle of an argument between Amy and Wil Wheaton.",
      "slug" => "episode119"
    ],
    [
      "season_id" => 6,
      "title" => "The 43 Peculiarity",
      "number" => 8,
      "synopsis" => "Leonard feels threatened after hearing about Penny's study partner at school, while Howard and Raj become determined to find out one of Sheldon's secrets.",
      "slug" => "episode120"
    ],
    [
      "season_id" => 6,
      "title" => "The Parking Spot Escalation",
      "number" => 9,
      "synopsis" => "The gang are drawn into a fight between Howard and Sheldon over Sheldon's vacant parking spot at the university.",
      "slug" => "episode121"
    ],
    [
      "season_id" => 6,
      "title" => "The Fish Guts Displacement",
      "number" => 10,
      "synopsis" => "Howard tries to bond with Bernadette's father during a fishing trip. When Sheldon is obligated to take care of a sick Amy, she finds ways to take advantage of the situation.",
      "slug" => "episode122"
    ],
    [
      "season_id" => 6,
      "title" => "The Santa Simulation",
      "number" => 11,
      "synopsis" => "The girls take Raj out to a nightclub to find him a date. A game of Dungeons and Dragons rekindle old memories of Santa for Sheldon.",
      "slug" => "episode123"
    ],
    [
      "season_id" => 6,
      "title" => "The Egg Salad Equivalency",
      "number" => 12,
      "synopsis" => "When Penny finds out Alex has a crush on Leonard, Sheldon gets himself and the rest of the guys in trouble with Human Resources whilst trying to solve the problem.",
      "slug" => "episode124"
    ],
    [
      "season_id" => 6,
      "title" => "The Bakersfield Expedition",
      "number" => 13,
      "synopsis" => "The guys are stranded in the middle of nowhere when Leonard's car is stolen on the way to the Bakersfield Comic-Con. Back home, the girls try to figure out why the guys are so fascinated with comic books.",
      "slug" => "episode125"
    ],
    [
      "season_id" => 6,
      "title" => "The Cooper/Kripke Inversion",
      "number" => 14,
      "synopsis" => "Sheldon is forced to work with Kripke on a project and must concoct an elaborate lie when he can't hold up his end of the work. Howard and Raj get superhero figurines made of themselves.",
      "slug" => "episode126"
    ],
    [
      "season_id" => 6,
      "title" => "The Spoiler Alert Segmentation",
      "number" => 15,
      "synopsis" => "Leonard moves in with Penny after a fight with Sheldon, which causes Amy to want to move in with Sheldon. Meanwhile, Raj has a frightening experience with Howard's mother.",
      "slug" => "episode127"
    ],
    [
      "season_id" => 6,
      "title" => "The Tangible Affection Proof",
      "number" => 16,
      "synopsis" => "Sheldon gets Alex to buy a Valentine's Day gift for Amy. Leonard, Penny, Howard and Bernadette have a disastrous dinner together. Raj and Stuart host a 'Lonely People party' at the comic book store.",
      "slug" => "episode128"
    ],
    [
      "season_id" => 6,
      "title" => "The Monster Isolation",
      "number" => 17,
      "synopsis" => "Raj falls apart after his date sneaks out on him, and Sheldon reluctantly returns the favor after Penny helps him out with his 'Fun With Flags' program.",
      "slug" => "episode129"
    ],
    [
      "season_id" => 6,
      "title" => "The Contractual Obligation Implementation",
      "number" => 18,
      "synopsis" => "Leonard, Sheldon and Howard give lectures on science to junior high students. The girls ditch work to go to Disneyland. Raj devises a date for Lucy that fixes their social anxiety problems.",
      "slug" => "episode130"
    ],
    [
      "season_id" => 6,
      "title" => "The Closet Reconfiguration",
      "number" => 19,
      "synopsis" => "Howard becomes upset when Sheldon finds a letter from his estranged father whilst cleaning out his and Bernadette's closet.",
      "slug" => "episode131"
    ],
    [
      "season_id" => 6,
      "title" => "The Tenure Turbulence",
      "number" => 20,
      "synopsis" => "Leonard, Sheldon, Raj and Kripke battle for tenure at the university.",
      "slug" => "episode132"
    ],
    [
      "season_id" => 6,
      "title" => "The Closure Alternative",
      "number" => 21,
      "synopsis" => "Amy tries to help a depressed Sheldon find closure when one of his favorite TV shows is canceled. Raj becomes paranoid when he finds Lucy's blog.",
      "slug" => "episode133"
    ],
    [
      "season_id" => 6,
      "title" => "The Proton Resurgence",
      "number" => 22,
      "synopsis" => "Bernadette and Howard offer to watch Raj's dog and live to regret it. Leonard and Sheldon hire their favorite childhood star to make an appearance.",
      "slug" => "episode134"
    ],
    [
      "season_id" => 6,
      "title" => "The Love Spell Potential",
      "number" => 23,
      "synopsis" => "A date between Raj and Lucy takes both of them out of their comfort zones. After a trip to Las Vegas goes awry, the girls join in on a Dungeons and Dragons game, which causes Amy and Sheldon to re-evaluate their relationship.",
      "slug" => "episode135"
    ],
    [
      "season_id" => 6,
      "title" => "The Bon Voyage Reaction",
      "number" => 24,
      "synopsis" => "Penny is thrown for a loop when Leonard is offered a job overseas, but the news is an even bigger shock to Sheldon. Raj and Lucy's relationship comes to a crossroad.",
      "slug" => "episode136"
    ],
    [
      "season_id" => 7,
      "title" => "The Hofstadter Insufficiency",
      "number" => 1,
      "synopsis" => "Sheldon and Penny bond over missing Leonard. Howard tries to help Raj get over his breakup with Lucy. Amy and Bernadette take a trip together to a biology convention.",
      "slug" => "episode137"
    ],
    [
      "season_id" => 7,
      "title" => "The Deception Verification",
      "number" => 2,
      "synopsis" => "Sheldon feels betrayed when Leonard returns from the North Sea and wants to spend his time with Penny instead of him. Howard's latest foray into helping his mother has some disastrous side effects.",
      "slug" => "episode138"
    ],
    [
      "season_id" => 7,
      "title" => "The Scavenger Vortex",
      "number" => 3,
      "synopsis" => "The gang get competitive when they are forced to take part in Raj's scavenger hunt.",
      "slug" => "episode139"
    ],
    [
      "season_id" => 7,
      "title" => "The Raiders Minimization",
      "number" => 4,
      "synopsis" => "Sheldon gets mad at Amy for ruining one of his favorite movies, Raj and Stuart try to make their online dating profiles more appealing, and Leonard tries to play the sympathy card with Penny.",
      "slug" => "episode140"
    ],
    [
      "season_id" => 7,
      "title" => "The Workplace Proximity",
      "number" => 5,
      "synopsis" => "After a fight with Bernadette, Howard ends up on Raj's couch. Sheldon and Amy clash when Amy takes a job at the university.",
      "slug" => "episode141"
    ],
    [
      "season_id" => 7,
      "title" => "The Romance Resonance",
      "number" => 6,
      "synopsis" => "Howard plans something special to celebrate the anniversary of his first date with Bernadette. Sheldon is conflicted when he makes a major scientific breakthrough but some details have to be corrected.",
      "slug" => "episode142"
    ],
    [
      "season_id" => 7,
      "title" => "The Proton Displacement",
      "number" => 7,
      "synopsis" => "Sheldon seeks payback when Arthur 'Professor Proton' Jeffries asks Leonard for help on a project instead of him. Raj gets upset at Howard for crashing his night with the girls.",
      "slug" => "episode143"
    ],
    [
      "season_id" => 7,
      "title" => "The Itchy Brain Simulation",
      "number" => 8,
      "synopsis" => "Sheldon demands Leonard make up for a mistake from their past. Penny confronts Raj's ex-girlfriend, Lucy.",
      "slug" => "episode144"
    ],
    [
      "season_id" => 7,
      "title" => "The Thanksgiving Decoupling",
      "number" => 9,
      "synopsis" => "The gang spend Thanksgiving at Mrs. Wolowitz's house. Howard tries to bond with his father-in-law, and a mistake from Penny's past comes back to haunt her.",
      "slug" => "episode145"
    ],
    [
      "season_id" => 7,
      "title" => "The Discovery Dissipation",
      "number" => 10,
      "synopsis" => "Leonard has to deal with the fallout of disproving Sheldon's new scientific discovery. Raj spends a week at Howard and Bernadette's apartment.",
      "slug" => "episode146"
    ],
    [
      "season_id" => 7,
      "title" => "The Cooper Extraction",
      "number" => 11,
      "synopsis" => "While Sheldon is at home in Texas, the rest of the gang decorate for Christmas and think about how much he has affected their lives.",
      "slug" => "episode147"
    ],
    [
      "season_id" => 7,
      "title" => "The Hesitation Ramification",
      "number" => 12,
      "synopsis" => "After Leonard tries to help Penny following a failed role on a TV show, she makes an important decision. Meanwhile, Raj and Stuart try to practice their social skills, and Sheldon navigates the intricacies of being funny.",
      "slug" => "episode148"
    ],
    [
      "season_id" => 7,
      "title" => "The Occupation Recalibration",
      "number" => 13,
      "synopsis" => "Sheldon tries to relax after he is forced to take a vacation. Leonard struggles to be supportive of Penny after she quits her job. Amy receives unwanted attention from a co-worker. Bernadette seeks Stuart's help in replacing one of Howard's comic books.",
      "slug" => "episode149"
    ],
    [
      "season_id" => 7,
      "title" => "The Convention Conundrum",
      "number" => 14,
      "synopsis" => "When the guys can't get hold of any Comic-Con tickets, Sheldon tries to hold his own convention and ends up spending a wild night with James Earl Jones. Meanwhile, the girls try to feel more mature by going to a fancy hotel for tea.",
      "slug" => "episode150"
    ],
    [
      "season_id" => 7,
      "title" => "The Locomotive Manipulation",
      "number" => 15,
      "synopsis" => "Sheldon and Amy take a train ride to Napa Valley with Howard and Bernadette on Valentine's Day. Leonard and Penny take Raj's dog to the vet when she accidentally eats some chocolate.",
      "slug" => "episode151"
    ],
    [
      "season_id" => 7,
      "title" => "The Table Polarization",
      "number" => 16,
      "synopsis" => "Leonard's purchase of a dining room table causes Sheldon to reevaluate the changes in his life. Meanwhile, Howard is offered a chance to go back to space and Bernadette struggles with whether or not to encourage him.",
      "slug" => "episode152"
    ],
    [
      "season_id" => 7,
      "title" => "The Friendship Turbulence",
      "number" => 17,
      "synopsis" => "After arguing with Sheldon, Howard tries to make amends by taking him to NASA headquarters in Houston. Penny has second thoughts about quitting her waitressing job when her car dies. Amy gets involved in trying to find Raj a date.",
      "slug" => "episode153"
    ],
    [
      "season_id" => 7,
      "title" => "The Mommy Observation",
      "number" => 18,
      "synopsis" => "When Sheldon visits his mother in Houston, he is forced to confront a new reality. Back in Pasadena, the rest of the gang reluctantly take part in Raj's Murder Mystery party.",
      "slug" => "episode154"
    ],
    [
      "season_id" => 7,
      "title" => "The Indecision Amalgamation",
      "number" => 19,
      "synopsis" => "While Raj is wracked with guilt when he tries to date Lucy and Emily at the same time, Penny wrestles with whether to take a role in a cheesy movie and Sheldon is torn trying to choose between two gaming systems.",
      "slug" => "episode155"
    ],
    [
      "season_id" => 7,
      "title" => "The Relationship Diremption",
      "number" => 20,
      "synopsis" => "Penny tries to help Sheldon when he reconsiders his 'relationship' with String Theory. During a dinner with Howard and Bernadette, Raj discovers Howard once embarrassed himself on a date with Emily.",
      "slug" => "episode156"
    ],
    [
      "season_id" => 7,
      "title" => "The Anything Can Happen Recurrence",
      "number" => 21,
      "synopsis" => "When Sheldon tries to be spontaneous, it leads to unexpected friction between the girls. Meanwhile, Raj seeks Howard's help in preparing for a date with Emily.",
      "slug" => "episode157"
    ],
    [
      "season_id" => 7,
      "title" => "The Proton Transmogrification",
      "number" => 22,
      "synopsis" => "As the gang celebrate Star Wars Day, Sheldon has difficulty dealing with the recent death of Arthur 'Professor Proton' Jeffries.",
      "slug" => "episode158"
    ],
    [
      "season_id" => 7,
      "title" => "The Gorilla Dissolution",
      "number" => 23,
      "synopsis" => "Penny gets fired from her movie and takes a serious look at her life. Raj sees Emily on a date with another man at the movies. Howard and Bernadette have to take care of his mother after she breaks her leg.",
      "slug" => "episode159"
    ],
    [
      "season_id" => 7,
      "title" => "The Status Quo Combustion",
      "number" => 24,
      "synopsis" => "Sheldon gets upset about his career, the destruction of the comic book store and Leonard and Penny's future living arrangements. Howard and Bernadette struggle to keep hold of a caregiver for Mrs. Wolowitz.",
      "slug" => "episode160"
    ],
    [
      "season_id" => 8,
      "title" => "The Locomotion Interruption",
      "number" => 1,
      "synopsis" => "Sheldon's trip comes to an end when he is robbed, Penny interviews for a job at Bernadette's company, and Howard is weirded out by his mother's relationship with Stuart.",
      "slug" => "episode161"
    ],
    [
      "season_id" => 8,
      "title" => "The Junior Professor Solution",
      "number" => 2,
      "synopsis" => "Sheldon is forced to teach a class as a Junior Professor. Meanwhile, Amy plays both sides when tension arises between Penny and Bernadette.",
      "slug" => "episode162"
    ],
    [
      "season_id" => 8,
      "title" => "The First Pitch Insufficiency",
      "number" => 3,
      "synopsis" => "Howard becomes nervous after NASA asks him to throw out the first pitch at a Los Angeles Angels game. Meanwhile, Leonard and Penny try to prove Sheldon wrong when he says that he and Amy have a 'superior' relationship.",
      "slug" => "episode163"
    ],
    [
      "season_id" => 8,
      "title" => "The Hook-up Reverberation",
      "number" => 4,
      "synopsis" => "Raj's honesty about his past comes back to haunt him after Emily takes a dislike to Penny. Meanwhile, the guys consider investing in the comic book store.",
      "slug" => "episode164"
    ],
    [
      "season_id" => 8,
      "title" => "The Focus Attenuation",
      "number" => 5,
      "synopsis" => "The girls head to Las Vegas, while the guys try to invent something cool, but only come up with new ways to procrastinate.",
      "slug" => "episode165"
    ],
    [
      "season_id" => 8,
      "title" => "The Expedition Approximation",
      "number" => 6,
      "synopsis" => "Sheldon and Raj test whether they could survive a dark-matter research expedition in a salt mine by simulating the conditions in a steam tunnel. Meanwhile, Leonard and Penny seek advice from Howard and Bernadette when they argue about money.",
      "slug" => "episode166"
    ],
    [
      "season_id" => 8,
      "title" => "The Misinterpretation Agitation",
      "number" => 7,
      "synopsis" => "The guys befriend one of Penny's clients when he shows up at her apartment. Meanwhile, Bernadette gets upset when Amy torpedoes an article about her for a local magazine.",
      "slug" => "episode167"
    ],
    [
      "season_id" => 8,
      "title" => "The Prom Equivalency",
      "number" => 8,
      "synopsis" => "The girls decide to re-enact their high school proms with the guys. While Sheldon feels under pressure to commit to his relationship with Amy, Howard worries about who Stuart will bring as his date.",
      "slug" => "episode168"
    ],
    [
      "season_id" => 8,
      "title" => "The Septum Deviation",
      "number" => 9,
      "synopsis" => "Sheldon panics when Leonard announces he has to go into the hospital for surgery. Raj discovers his parents have divorced.",
      "slug" => "episode169"
    ],
    [
      "season_id" => 8,
      "title" => "The Champagne Reflection",
      "number" => 10,
      "synopsis" => "While Sheldon retires 'Fun With Flags', Leonard, Howard and Raj look for something significant in a dead professor's research, and Bernadette finds out what her colleagues really think of her.",
      "slug" => "episode170"
    ],
    [
      "season_id" => 8,
      "title" => "The Clean Room Infiltration",
      "number" => 11,
      "synopsis" => "Amy hosts a traditional Victorian Christmas Eve dinner as Raj's father comes to visit, while the guys try to shoo out a bird they let into the university clean room.",
      "slug" => "episode171"
    ],
    [
      "season_id" => 8,
      "title" => "The Space Probe Disintegration",
      "number" => 12,
      "synopsis" => "Raj worries a probe he designed will not work in outer space, while Leonard and Sheldon go shopping with Penny and Amy.",
      "slug" => "episode172"
    ],
    [
      "season_id" => 8,
      "title" => "The Anxiety Optimization",
      "number" => 13,
      "synopsis" => "When Sheldon becomes stuck in a rut with his work, the gang try to help him by raising his stress levels. Howard teases Raj with a game called 'Emily or Cinnamon.'",
      "slug" => "episode173"
    ],
    [
      "season_id" => 8,
      "title" => "The Troll Manifestation",
      "number" => 14,
      "synopsis" => "Leonard and Sheldon defend themselves against criticism from an online bully, while the girls confront embarrassing moments from their pasts.",
      "slug" => "episode174"
    ],
    [
      "season_id" => 8,
      "title" => "The Comic Book Store Regeneration",
      "number" => 15,
      "synopsis" => "Howard receives some shocking news as everyone prepares for the re-opening of the comic book store. Meanwhile, Penny tries to teach Sheldon how to 'let it go,' but can't follow her own advice when she learns something infuriating about Amy.",
      "slug" => "episode175"
    ],
    [
      "season_id" => 8,
      "title" => "The Intimacy Acceleration",
      "number" => 16,
      "synopsis" => "Sheldon and Penny agree to participate in an unusual experiment. Leonard, Amy, Raj and Emily spend the evening trying to escape a room with a 'zombie'. Howard and Bernadette run into trouble at the airport after returning from Mrs. Wolowitz's funeral.",
      "slug" => "episode176"
    ],
    [
      "season_id" => 8,
      "title" => "The Colonization Application",
      "number" => 17,
      "synopsis" => "A trip to the pet store ends in a fight after Amy learns Sheldon has applied for a one-way mission to colonize Mars. Meanwhile, Leonard surprises Penny with a very 'adult' purchase, and Raj gets into trouble when he snoops around Emily's apartment.",
      "slug" => "episode177"
    ],
    [
      "season_id" => 8,
      "title" => "The Leftover Thermalization",
      "number" => 18,
      "synopsis" => "Tension arises when a magazine fails to mention Leonard in an article about the paper he co-wrote with Sheldon, and a blackout at Mrs. Wolowitz's home leads to a final family dinner in her honor.",
      "slug" => "episode178"
    ],
    [
      "season_id" => 8,
      "title" => "The Skywalker Incursion",
      "number" => 19,
      "synopsis" => "When Leonard and Sheldon are invited to speak at UC Berkeley, they take a detour to try and meet one of their idols. Meanwhile, while cleaning out Mrs. Wolowitz's house, a ping pong battle ensues when Howard and Bernadette argue over the fate of his TARDIS.",
      "slug" => "episode179"
    ],
    [
      "season_id" => 8,
      "title" => "The Fortification Implementation",
      "number" => 20,
      "synopsis" => "Howard meets the half-brother he never knew he had. Penny is invited to appear on Wil Wheaton's podcast.",
      "slug" => "episode180"
    ],
    [
      "season_id" => 8,
      "title" => "The Communication Deterioration",
      "number" => 21,
      "synopsis" => "When Raj is asked to create a message on the off chance a NASA mission discovers alien life, the guys fight over what he should do, while Penny contemplates returning to acting.",
      "slug" => "episode181"
    ],
    [
      "season_id" => 8,
      "title" => "The Graduation Transmission",
      "number" => 22,
      "synopsis" => "Howard questions his engineering abilities when he and Sheldon can't get a toy drone to fly. A cancelled flight nearly prevents Leonard from giving the commencement address at his former high school. Raj pits his parents against each other when his father cuts him off financially.",
      "slug" => "episode182"
    ],
    [
      "season_id" => 8,
      "title" => "The Maternal Combustion",
      "number" => 23,
      "synopsis" => "Personalities collide when Leonard and Sheldon's mothers meet for the first time. Bernadette reaches her limit with Howard and Stuart.",
      "slug" => "episode183"
    ],
    [
      "season_id" => 8,
      "title" => "The Commitment Determination",
      "number" => 24,
      "synopsis" => "As Sheldon presses Leonard and Penny to set a wedding date, he encounters major changes in his relationship with Amy. Meanwhile, Raj wonders if he should break up with Emily, and Howard and Bernadette struggle to ask Stuart to move out.",
      "slug" => "episode184"
    ],
    [
      "season_id" => 9,
      "title" => "The Matrimonial Momentum",
      "number" => 1,
      "synopsis" => "Penny struggles with Leonard's confession that he kissed another woman as they prepare to get married in Las Vegas. Meanwhile, Sheldon doesn't know what to do after Amy pushes pause on their relationship.",
      "slug" => "episode185"
    ],
    [
      "season_id" => 9,
      "title" => "The Separation Oscillation",
      "number" => 2,
      "synopsis" => "Leonard and Penny try to work through their marital issues. Meanwhile, Sheldon films a special episode of 'Fun with Flag' after his breakup with Amy, and Bernadette feels guilty about withholding a secret from Penny.",
      "slug" => "episode186"
    ],
    [
      "season_id" => 9,
      "title" => "The Bachelor Party Corrosion",
      "number" => 3,
      "synopsis" => "The guys's skills are put to the test when they get a flat tire on the way to Mexico for Leonard's bachelor party. The girls throw Penny a mini-bachelorette party.",
      "slug" => "episode187"
    ],
    [
      "season_id" => 9,
      "title" => "The 2003 Approximation",
      "number" => 4,
      "synopsis" => "An impending change to his living arrangements inspires Sheldon to revert to 2003, before he met Penny and Leonard. Raj and Howard form a band for the comic book store.",
      "slug" => "episode188"
    ],
    [
      "season_id" => 9,
      "title" => "The Perspiration Implementation",
      "number" => 5,
      "synopsis" => "Kripke expresses interest in Amy while leading a fencing lesson for the guys. Meanwhile, Stuart seeks help from the girls in getting more women interested in the comic book store.",
      "slug" => "episode189"
    ],
    [
      "season_id" => 9,
      "title" => "The Helium Insufficiency",
      "number" => 6,
      "synopsis" => "Leonard and Sheldon go to great lengths to secure the helium they need during a nation-wide shortage. Meanwhile, the rest of the gang try to find Amy a new boyfriend on a dating app.",
      "slug" => "episode190"
    ],
    [
      "season_id" => 9,
      "title" => "The Spock Resonance",
      "number" => 7,
      "synopsis" => "While being interviewed for a documentary about Spock from Star Trek (1966), Sheldon struggles to suppress his emotions about his recent break-up from Amy. Meanwhile, Howard and Bernadette butt heads over renovating his mother's house.",
      "slug" => "episode191"
    ],
    [
      "season_id" => 9,
      "title" => "The Mystery Date Observation",
      "number" => 8,
      "synopsis" => "Sheldon, Howard and Raj post an ad online to find a new girlfriend for Sheldon. Penny and Bernadette decide to spy when Amy is secretive about who she is dating.",
      "slug" => "episode192"
    ],
    [
      "season_id" => 9,
      "title" => "The Platonic Permutation",
      "number" => 9,
      "synopsis" => "On Thanksgiving, Sheldon and Amy try to spend time together as friends and go to an aquarium, Howard reluctantly agrees to volunteer at the soup kitchen with Bernadette, Raj and Emily, and Penny discovers that Leonard knows more about her than she thought.",
      "slug" => "episode193"
    ],
    [
      "season_id" => 9,
      "title" => "The Earworm Reverberation",
      "number" => 10,
      "synopsis" => "Sheldon has a revelation when he realizes why a song was stuck in his head. Meanwhile, Amy invites Dave over for dinner despite their previously awkward date, and Howard and Raj become obsessed with a fan of their band.",
      "slug" => "episode194"
    ],
    [
      "season_id" => 9,
      "title" => "The Opening Night Excitation",
      "number" => 11,
      "synopsis" => "Leonard, Howard and Raj have to decide who will take their extra Star Wars movie ticket, while Sheldon plans something special for Amy's birthday.",
      "slug" => "episode195"
    ],
    [
      "season_id" => 9,
      "title" => "The Sales Call Sublimation",
      "number" => 12,
      "synopsis" => "Penny gets more than she bargained for when Leonard agrees to meet with a psychiatrist on her behalf to make a sale. Meanwhile, Sheldon and Raj collaborate on an astronomical discovery, and Howard and Bernadette's happiness is short-lived after Stuart moves out.",
      "slug" => "episode196"
    ],
    [
      "season_id" => 9,
      "title" => "The Empathy Optimization",
      "number" => 13,
      "synopsis" => "After being forced to deal with a sick Sheldon, the rest of the gang try to treat themselves to a Sheldon-free weekend.",
      "slug" => "episode197"
    ],
    [
      "season_id" => 9,
      "title" => "The Meemaw Materialization",
      "number" => 14,
      "synopsis" => "Sheldon is thrilled when his Meemaw comes to visit, but his excitement quickly fades when she butts heads with Amy. Meanwhile, Raj meets a girl at the comic book store who makes him question his relationship with Emily.",
      "slug" => "episode198"
    ],
    [
      "season_id" => 9,
      "title" => "The Valentino Submergence",
      "number" => 15,
      "synopsis" => "Sheldon and Amy host a Valentine's Day episode of 'Fun with Flags', Leonard and Penny grapple with getting older, Howard and Bernadette find a surprise in their hot tub and Raj is torn between Emily and Claire.",
      "slug" => "episode199"
    ],
    [
      "season_id" => 9,
      "title" => "The Positive Negative Reaction",
      "number" => 16,
      "synopsis" => "Bernadette reveals her pregnancy to Howard and the rest of the gang.",
      "slug" => "episode200"
    ],
    [
      "season_id" => 9,
      "title" => "The Celebration Experimentation",
      "number" => 17,
      "synopsis" => "The gang convince Sheldon to celebrate his birthday and throw him a party.",
      "slug" => "episode201"
    ],
    [
      "season_id" => 9,
      "title" => "The Application Deterioration",
      "number" => 18,
      "synopsis" => "Leonard, Sheldon, and Howard run into problems when they file for a patent for their infinite persistence gyroscope. Meanwhile, the girls give Raj dating advice when Emily reaches out to him after their breakup.",
      "slug" => "episode202"
    ],
    [
      "season_id" => 9,
      "title" => "The Solder Excursion Diversion",
      "number" => 19,
      "synopsis" => "Amy is shocked at a revelation from Sheldon after she buys him a new laptop. Meanwhile, Raj sells out Leonard and Howard after they lie to their wives in order to attend an early screening of a movie.",
      "slug" => "episode203"
    ],
    [
      "season_id" => 9,
      "title" => "The Big Bear Precipitation",
      "number" => 20,
      "synopsis" => "Secrets are revealed when Amy and Sheldon join Penny and Leonard on a weekend cabin trip. Raj is more excited about Howard's and Bernadette's impending parenthood than they are.",
      "slug" => "episode204"
    ],
    [
      "season_id" => 9,
      "title" => "The Viewing Party Combustion",
      "number" => 21,
      "synopsis" => "The gang pick sides when a small argument between Leonard and Sheldon erupts into a heated fight during a 'Game of Thrones' viewing party.",
      "slug" => "episode205"
    ],
    [
      "season_id" => 9,
      "title" => "The Fermentation Bifurcation",
      "number" => 22,
      "synopsis" => "Sheldon and Bernadette spend the evening together while the rest of the gang go to a wine tasting party, but things get uncomfortable for Raj when Penny's ex-boyfriend Zack shows up and takes an interest in Claire.",
      "slug" => "episode206"
    ],
    [
      "season_id" => 9,
      "title" => "The Line Substitution Solution",
      "number" => 23,
      "synopsis" => "Sheldon hires Stuart to spend the day with Amy when he would rather go to the movies. Meanwhile, Penny struggles to make a connection with Leonard's mother when she comes to visit.",
      "slug" => "episode207"
    ],
    [
      "season_id" => 9,
      "title" => "The Convergence Convergence",
      "number" => 24,
      "synopsis" => "Leonard and Penny try to have a wedding ceremony that everyone can attend, but it creates serious conflict among Sheldon's mother and Leonard's divorced parents. Meanwhile, Howard and Raj become convinced the government is out to get them.",
      "slug" => "episode208"
    ],
    [
      "season_id" => 10,
      "title" => "Recap",
      "number" => 0,
      "synopsis" => "A collection of some of last season's hilarious and most memorable moments.",
      "slug" => "episode209"
    ],
    [
      "season_id" => 10,
      "title" => "The Conjugal Conjecture",
      "number" => 1,
      "synopsis" => "As Leonard and Penny attempt to hold another wedding ceremony everyone can attend, they have to deal with Penny's family arriving and Leonard's father spending the night with Sheldon's mother.",
      "slug" => "episode210"
    ],
    [
      "season_id" => 10,
      "title" => "The Military Miniaturization",
      "number" => 2,
      "synopsis" => "Howard is visited by an Air Force colonel regarding his invention. Penny accidentally lets it slip about Bernadette's pregnancy to their co-workers.",
      "slug" => "episode211"
    ],
    [
      "season_id" => 10,
      "title" => "The Dependence Transcendence",
      "number" => 3,
      "synopsis" => "Bernadette confesses to Raj that she isn't sure if she's ready to be a mother, Penny accompanies Amy to a university mixer, and Sheldon goes to unusual extremes to assist Howard with his military project.",
      "slug" => "episode212"
    ],
    [
      "season_id" => 10,
      "title" => "The Cohabitation Experimentation",
      "number" => 4,
      "synopsis" => "When Amy must vacate her apartment for repairs, living arrangements are made with Leonard, Sheldon, and Penny. Howard and Bernadette don't want to know the sex of their baby, but Raj finds out.",
      "slug" => "episode213"
    ],
    [
      "season_id" => 10,
      "title" => "The Hot Tub Contamination",
      "number" => 5,
      "synopsis" => "Sheldon and Amy go through a period of adjustment with their new living arrangement. Howard and Bernadette are forced to vacation at home when she falls ill and keep it a secret, unaware Raj and Stuart planned to use their hot tub.",
      "slug" => "episode214"
    ],
    [
      "season_id" => 10,
      "title" => "The Fetal Kick Catalyst",
      "number" => 6,
      "synopsis" => "Sheldon and Amy host a brunch. Penny is surprised by her popularity when her movie, 'Serial Ape-Ist' is featured at a Van Nuys comic book convention. Howard starts to freak out about parenthood after feeling the baby kick for the first time.",
      "slug" => "episode215"
    ],
    [
      "season_id" => 10,
      "title" => "The Veracity Elasticity",
      "number" => 7,
      "synopsis" => "Amy doesn't tell Sheldon her apartment has been repaired. Leonard finds out Penny is slowly moving all of his collectible toys into storage.",
      "slug" => "episode216"
    ],
    [
      "season_id" => 10,
      "title" => "The Brain Bowl Incubation",
      "number" => 8,
      "synopsis" => "A successful gene experimentation leaves Sheldon excited to procreate with Amy, and he pulls out all stops to get her on board. Meanwhile, Raj takes an interest in the cleaning lady at the university.",
      "slug" => "episode217"
    ],
    [
      "season_id" => 10,
      "title" => "The Geology Elevation",
      "number" => 9,
      "synopsis" => "Sheldon can't contain his jealousy when Bert wins a grant for his geology research. A distasteful toy built by Howard faces judgement from the gang.",
      "slug" => "episode218"
    ],
    [
      "season_id" => 10,
      "title" => "The Property Division Collision",
      "number" => 10,
      "synopsis" => "Dividing up their possessions becomes an all-out war between Leonard and Sheldon. Stuart asks to live with Howard and Bernadette and tries to supplant Raj's efforts to help with the new baby.",
      "slug" => "episode219"
    ],
    [
      "season_id" => 10,
      "title" => "The Birthday Synchronicity",
      "number" => 11,
      "synopsis" => "Amy's desire to have an intimate night with Sheldon on her birthday is interrupted by Bernadette going into labor.",
      "slug" => "episode220"
    ],
    [
      "season_id" => 10,
      "title" => "The Holiday Summation",
      "number" => 12,
      "synopsis" => "After spending the holidays apart, the gang get together to hear about Sheldon's and Amy's trip to Texas, Leonard's and Penny's Christmas tree adventure, and Howard's and Bernadette's first days as parents.",
      "slug" => "episode221"
    ],
    [
      "season_id" => 10,
      "title" => "The Romance Recalibration",
      "number" => 13,
      "synopsis" => "Leonard and Penny ask for Sheldon's and Amy's help on putting the romance back in their marriage. Howard and Raj go to extreme lengths to stop the floor in Halley's bedroom from making noise.",
      "slug" => "episode222"
    ],
    [
      "season_id" => 10,
      "title" => "The Emotion Detection Automation",
      "number" => 14,
      "synopsis" => "Penny wants to help her brother get a job with her company. Sheldon learns of a machine that will help him understand human emotions. Raj reunites some of his old girlfriends to figure out why he is still single.",
      "slug" => "episode223"
    ],
    [
      "season_id" => 10,
      "title" => "The Locomotion Reverberation",
      "number" => 15,
      "synopsis" => "Leonard and Howard's attempt to keep Sheldon away from their Air Force project by sending him on a train trip backfires. Penny and Amy take Bernadette for her first night out since having the baby.",
      "slug" => "episode224"
    ],
    [
      "season_id" => 10,
      "title" => "The Allowance Evaporation",
      "number" => 16,
      "synopsis" => "Sheldon and Amy have their first fight since moving in together. Meanwhile Raj is shocked at the reality of financial independence when he stops receiving support from his father.",
      "slug" => "episode225"
    ],
    [
      "season_id" => 10,
      "title" => "The Comic-Con Conundrum",
      "number" => 17,
      "synopsis" => "The guys' annual trip to Comic Con is in doubt when Raj can't afford to go.",
      "slug" => "episode226"
    ],
    [
      "season_id" => 10,
      "title" => "The Escape Hatch Identification",
      "number" => 18,
      "synopsis" => "When the gang offer places for Raj to live, it creates unexpected conflict among everyone.",
      "slug" => "episode227"
    ],
    [
      "season_id" => 10,
      "title" => "The Collaboration Fluctuation",
      "number" => 19,
      "synopsis" => "Leonard, Penny and Raj adjust to their new living arrangements; Sheldon expresses an interest in Amy's work.",
      "slug" => "episode228"
    ],
    [
      "season_id" => 10,
      "title" => "The Recollection Dissipation",
      "number" => 20,
      "synopsis" => "Sheldon reaches his limit when he works on projects with Leonard, Howard and Amy in one day. Bernadette has doubts about leaving Halley when she goes back to work.",
      "slug" => "episode229"
    ],
    [
      "season_id" => 10,
      "title" => "The Separation Agitation",
      "number" => 21,
      "synopsis" => "Howard and Bernadette have a hard time leaving Halley in daycare when Bernadette returns to work. Bert introduces the gang to his new girlfriend.",
      "slug" => "episode230"
    ],
    [
      "season_id" => 10,
      "title" => "The Cognition Regeneration",
      "number" => 22,
      "synopsis" => "Leonard is less than thrilled when Penny considers accepting a job offer from her ex-boyfriend, Zack. Sheldon worries that he hasn't reached his full potential soon enough.",
      "slug" => "episode231"
    ],
    [
      "season_id" => 10,
      "title" => "The Gyroscopic Collapse",
      "number" => 23,
      "synopsis" => "After celebrating the completion of the top-secret Air Force project, Leonard, Sheldon and Howard get an unwelcome surprise; Amy receives an offer for a summer position at Princeton as a visiting researcher.",
      "slug" => "episode232"
    ],
    [
      "season_id" => 10,
      "title" => "The Long Distance Dissonance",
      "number" => 24,
      "synopsis" => "The gang become concerned when Sheldon's former admirer, Ramona Nowitzki, resurfaces while Amy is away at Princeton.",
      "slug" => "episode233"
    ],
    [
      "season_id" => 11,
      "title" => "The Proposal Proposal",
      "number" => 1,
      "synopsis" => "Amy has trouble deciding whether or not she should marry Sheldon. Meanwhile, Bernadette confides in Penny when she finds out some huge news.",
      "slug" => "episode234"
    ],
    [
      "season_id" => 11,
      "title" => "The Retraction Reaction",
      "number" => 2,
      "synopsis" => "Leonard angers the University and the Physics Community when he gives an embarrassing radio interview. Bernadette and Amy compare their successes at work.",
      "slug" => "episode235"
    ],
    [
      "season_id" => 11,
      "title" => "The Relaxation Integration",
      "number" => 3,
      "synopsis" => "Sheldon and Amy struggle with picking a wedding date. Meanwhile, Stuart and Raj fight over one of Bernadette's co-workers for a date.",
      "slug" => "episode236"
    ],
    [
      "season_id" => 11,
      "title" => "The Explosion Implosion",
      "number" => 4,
      "synopsis" => "Howard and Bernadette are disappointed when they find out the sex of the baby. Leonard is annoyed when his mother befriends Penny.",
      "slug" => "episode237"
    ],
    [
      "season_id" => 11,
      "title" => "The Collaboration Contamination",
      "number" => 5,
      "synopsis" => "Amy and Howard work in the lab together causing Sheldon, Bernadette and Raj to feel jealous and lonely. Penny starts using a parenting book to control Sheldon's behavior.",
      "slug" => "episode238"
    ],
    [
      "season_id" => 11,
      "title" => "The Proton Regeneration",
      "number" => 6,
      "synopsis" => "Sheldon and Wil Wheaton both go head-to-head for the role of the new Professor Proton, Meanwhile Penny takes care of Halley when Bernadette and Howard are on bed rest.",
      "slug" => "episode239"
    ],
    [
      "season_id" => 11,
      "title" => "The Geology Methodology",
      "number" => 7,
      "synopsis" => "When Bert asks Sheldon to collaborate on a project with him, Sheldon becomes worried about others finding out because he thinks geology is beneath him. Raj seeks advice after reconnecting with Ruchi.",
      "slug" => "episode240"
    ],
    [
      "season_id" => 11,
      "title" => "The Tesla Recoil",
      "number" => 8,
      "synopsis" => "Howard and Leonard become upset after they discover that Sheldon has been working with the military without telling them; Bernadette asks Raj to investigate her suspicions that Ruchi is attempting to take her job away from her.",
      "slug" => "episode241"
    ],
    [
      "season_id" => 11,
      "title" => "The Bitcoin Entanglement",
      "number" => 9,
      "synopsis" => "Sheldon tries to teach the other guys a lesson after they cut him out of a potentially valuable Bitcoin investment seven years ago.",
      "slug" => "episode242"
    ],
    [
      "season_id" => 11,
      "title" => "The Confidence Erosion",
      "number" => 10,
      "synopsis" => "Sheldon and Amy try to eliminate stress from wedding planning by applying math to the process. Raj and Howard come to blows when Raj begins to feel like Howard hurts his confidence.",
      "slug" => "episode243"
    ],
    [
      "season_id" => 11,
      "title" => "The Celebration Reverberation",
      "number" => 11,
      "synopsis" => "Raj and Howard's feud continues as the gang plan Halley's first birthday party. Sheldon's surprise for Amy's birthday goes awry when they get food poisoning.",
      "slug" => "episode244"
    ],
    [
      "season_id" => 11,
      "title" => "The Matrimonial Metric",
      "number" => 12,
      "synopsis" => "Sheldon and Amy pick their best-man and maid of honor by experimenting on the gang. Meanwhile, Leonard's self-confidence is still badly damaged after reading his brother's Christmas letter.",
      "slug" => "episode245"
    ],
    [
      "season_id" => 11,
      "title" => "The Solo Oscillation",
      "number" => 13,
      "synopsis" => "Sheldon kicks Amy out of the apartment to work solo, and she and Leonard end up bonding during a series of science experiments; Howard is replaced by Bert in Footprints on the Moon.",
      "slug" => "episode246"
    ],
    [
      "season_id" => 11,
      "title" => "The Separation Triangulation",
      "number" => 14,
      "synopsis" => "Raj meets a girl at the Planetarium, but soon after finds out she is married. Sheldon rents out his old room to use for his work.",
      "slug" => "episode247"
    ],
    [
      "season_id" => 11,
      "title" => "The Novelization Correlation",
      "number" => 15,
      "synopsis" => "Leonard's book raises questions, and Amy guest stars on the new Professor Proton show.",
      "slug" => "episode248"
    ],
    [
      "season_id" => 11,
      "title" => "The Neonatal Nomenclature",
      "number" => 16,
      "synopsis" => "When Bernadette won't go into labor, the gang try different tactics to get things started. Also, Wolowitz confronts Bernadette after Amy accidentally reveals she's already chosen their son's name.",
      "slug" => "episode249"
    ],
    [
      "season_id" => 11,
      "title" => "The Athenaeum Allocation",
      "number" => 17,
      "synopsis" => "Leonard jumps through hoops to help secure the perfect wedding venue for Sheldon and Amy. Also, Bernadette and Wolowitz have a hard time deciding who should stay at home with the kids and who should go back to work.",
      "slug" => "episode250"
    ],
    [
      "season_id" => 11,
      "title" => "The Gates Excitation",
      "number" => 18,
      "synopsis" => "Leonard, Howard and Raj try to meet Bill Gates, who's meeting with Penny to merge their companies; Sheldon thinks he's the victim of an April Fool's prank.",
      "slug" => "episode251"
    ],
    [
      "season_id" => 11,
      "title" => "The Tenant Disassociation",
      "number" => 19,
      "synopsis" => "Leonard runs against Sheldon to be president of the tenants association; Wolowitz and Koothrappali find a drone in the backyard.",
      "slug" => "episode252"
    ],
    [
      "season_id" => 11,
      "title" => "The Reclusive Potential",
      "number" => 20,
      "synopsis" => "Sheldon takes the guys to a cabin in the middle of nowhere to meet a reclusive scientist; Penny and Bernadette improvise Amy's bachelorette party.",
      "slug" => "episode253"
    ],
    [
      "season_id" => 11,
      "title" => "The Comet Polarization",
      "number" => 21,
      "synopsis" => "Sheldon's comic book store experience changes when writer Neil Gaiman puts Stuart's store on the map; friendships are threatened when Koothrappali takes credit for Penny's astronomical discovery.",
      "slug" => "episode254"
    ],
    [
      "season_id" => 11,
      "title" => "The Monetary Insufficiency",
      "number" => 22,
      "synopsis" => "Sheldon goes to Vegas to win money for science. Also, Penny and Bernadette take Amy wedding dress shopping, but her terrible choice entangles them in a web of lies.",
      "slug" => "episode255"
    ],
    [
      "season_id" => 11,
      "title" => "The Sibling Realignment",
      "number" => 23,
      "synopsis" => "Sheldon and Leonard make a road trip to wrangle a reluctant wedding guest.",
      "slug" => "episode256"
    ],
    [
      "season_id" => 11,
      "title" => "The Bow Tie Asymmetry",
      "number" => 24,
      "synopsis" => "When Amy's parents and Sheldon's family arrive, everybody is focused to make sure all wedding arrangements go according to plan - everyone except the bride and groom.",
      "slug" => "episode257"
    ],
    [
      "season_id" => 12,
      "title" => "The Conjugal Configuration",
      "number" => 1,
      "synopsis" => "After their wedding, Amy and Sheldon go on their honeymoon.",
      "slug" => "episode258"
    ],
    [
      "season_id" => 12,
      "title" => "The Wedding Gift Wormhole",
      "number" => 2,
      "synopsis" => "Leonard and Penny give Sheldon and Amy a baffling wedding gift.",
      "slug" => "episode259"
    ],
    [
      "season_id" => 12,
      "title" => "The Procreation Calculation",
      "number" => 3,
      "synopsis" => "The Wolowitzes' life gets complicated when Stuart starts bringing his new girlfriend home. Also, Penny and Leonard talk about starting a family while Koothrappali explores an arranged marriage.",
      "slug" => "episode260"
    ],
    [
      "season_id" => 12,
      "title" => "The Tam Turbulence",
      "number" => 4,
      "synopsis" => "Sheldon won't tell anyone why he's never mentioned Tam, his childhood best friend, so Leonard takes matters into his own hands. Also, Bernadette and Penny take out Raj's fiancée, Anu, for dinner to get the skinny on her.",
      "slug" => "episode261"
    ],
    [
      "season_id" => 12,
      "title" => "The Planetarium Collision",
      "number" => 5,
      "synopsis" => "Amy doesn't have time to work with Sheldon on super asymmetry, so he goes to great lengths to ensure she's available. Koothrappali doesn't want Wolowitz to join him in hosting a show at the planetarium.",
      "slug" => "episode262"
    ],
    [
      "season_id" => 12,
      "title" => "The Imitation Perturbation",
      "number" => 6,
      "synopsis" => "When Wolowitz dresses up as Sheldon for Halloween, Sheldon seeks retaliation at Leonard and Penny's Halloween party. Also, Leonard is shocked that Penny doesn't remember their first kiss.",
      "slug" => "episode263"
    ],
    [
      "season_id" => 12,
      "title" => "The Grant Allocation Derivation",
      "number" => 7,
      "synopsis" => "Leonard is caught between a rock and a hard place when he's responsible for distributing extra grant money. Also, Bernadette turns the backyard playhouse into a hideaway from her husband and kids.",
      "slug" => "episode264"
    ],
    [
      "season_id" => 12,
      "title" => "The Consummation Deviation",
      "number" => 8,
      "synopsis" => "Sheldon tries to bond with Amy's father, but when Wolowitz lures Mr. Fowler away with magic tricks, Sheldon has no choice but to bond with Mrs. Fowler. Also, Koothrappali and Anu try to get physical for the first time.",
      "slug" => "episode265"
    ],
    [
      "season_id" => 12,
      "title" => "The Citation Negation",
      "number" => 9,
      "synopsis" => "Sheldon and Amy are devastated after learning from a Russian paper that super asymmetry has already been theorized and disproved. Bernadette wants to beat Howard in a popular video game.",
      "slug" => "episode266"
    ],
    [
      "season_id" => 12,
      "title" => "The VCR Illumination",
      "number" => 10,
      "synopsis" => "A VHS tape from Sheldon's past inspires him and Amy not to give up when they're still feeling down about their theory being disproven. Bernadette turns into a pageant mom when she tries to help Howard with his Magic Castle audition.",
      "slug" => "episode267"
    ],
    [
      "season_id" => 12,
      "title" => "The Paintball Scattering",
      "number" => 11,
      "synopsis" => "Penny and Leonard organize a paintball game, which results in mayhem when Sheldon becomes jealous of Amy. Raj catches Anu with her ex-boyfriend. Stuart doesn't want to move in with Denise.",
      "slug" => "episode268"
    ],
    [
      "season_id" => 12,
      "title" => "The Propagation Proposition",
      "number" => 12,
      "synopsis" => "Penny's ex-boyfriend Zack learns that he is infertile, so he asks Leonard for help; Koothrappali attempts to mend things with his ex-fiancee Anu.",
      "slug" => "episode269"
    ],
    [
      "season_id" => 12,
      "title" => "The Confirmation Polarization",
      "number" => 13,
      "synopsis" => "Sheldon and Amy are thrilled when their super asymmetry theory is proven by two physicists, until they try to kick Amy off the Nobel nomination. Bernadette gets one of her drugs approved and wants a reluctant Penny to head the sales team.",
      "slug" => "episode270"
    ],
    [
      "season_id" => 12,
      "title" => "The Meteorite Manifestation",
      "number" => 14,
      "synopsis" => "Sheldon is thrilled to help Bernadette and Howard navigate bureaucracy concerning a neighbor's non-compliant balcony until he learns they too have ignored codes. Leonard is disappointed when his friends are uninterested in his new laser.",
      "slug" => "episode271"
    ],
    [
      "season_id" => 12,
      "title" => "The Donation Oscillation",
      "number" => 15,
      "synopsis" => "Penny tries to throw a wrench into Leonard's plan to be a sperm donor for her ex-boyfriend; Wolowitz, Bernadette, Anu and Koothrappali turn Koothrappali's canceled bachelor party into a couple's trip aboard the 'vomit comet.'",
      "slug" => "episode272"
    ],
    [
      "season_id" => 12,
      "title" => "The D & D Vortex",
      "number" => 16,
      "synopsis" => "The gang finds out Wil Wheaton hosts a celebrity Dungeons and Dragons game involving William Shatner, Joe Manganiello, Kareem Abdul-Jabbar and Kevin Smith. Deception and betrayal are the path to make it to the one open seat.",
      "slug" => "episode273"
    ],
    [
      "season_id" => 12,
      "title" => "The Conference Valuation",
      "number" => 17,
      "synopsis" => "Bernadette and Penny travel to San Diego for a pharmaceutical sales convention. Back home, Amy and the guys experiment on the Wolowitz children when Sheldon finds a book on it.",
      "slug" => "episode274"
    ],
    [
      "season_id" => 12,
      "title" => "The Laureate Accumulation",
      "number" => 18,
      "synopsis" => "Rivals Pemberton and Campbell charm America on a publicity tour so Sheldon and Amy try to win over Nobel laureates Kip Thorne, George Smoot and Frances Arnold. Halley's fear of the dark causes opportunity and conflict at the Wolowitz home.",
      "slug" => "episode275"
    ],
    [
      "season_id" => 12,
      "title" => "The Inspiration Deprivation",
      "number" => 19,
      "synopsis" => "Contemplating what it would mean to all women if she were to win a Nobel Prize causes Amy to have a meltdown. Koothrappali and Wolowitz try to relive the good old days after Wolowitz buys a scooter that looks like the one he had years ago.",
      "slug" => "episode276"
    ],
    [
      "season_id" => 12,
      "title" => "The Decision Reverberation",
      "number" => 20,
      "synopsis" => "Koothrappali is worried people won't take him seriously in his own field after publishing a paper that suggests he may have discovered alien life. Leonard wants to be the principal investigator on a plasma physics study.",
      "slug" => "episode277"
    ],
    [
      "season_id" => 12,
      "title" => "The Plagiarism Schism",
      "number" => 21,
      "synopsis" => "Kripke has proof that Dr. Pemberton plagiarized his thesis in college, and Sheldon and Amy aren't sure if they should turn him in. Wolowitz learns that Bernadette wasn't the only waitress at the Cheesecake Factory who had a crush on him.",
      "slug" => "episode278"
    ],
    [
      "season_id" => 12,
      "title" => "The Maternal Conclusion",
      "number" => 22,
      "synopsis" => "Leonard is pleasantly surprised when Beverly comes to visit and she's genuinely kind to him, until he finds out the real reason she's there. Also, Denise and Stuart overstay their welcome at the Wolowitz house.",
      "slug" => "episode279"
    ],
    [
      "season_id" => 12,
      "title" => "The Change Constant",
      "number" => 23,
      "synopsis" => "Sheldon and Amy await big news.",
      "slug" => "episode280"
    ],
    [
      "season_id" => 12,
      "title" => "The Stockholm Syndrome",
      "number" => 24,
      "synopsis" => "Bernadette and Wolowitz leave their kids for the first time; Penny and Leonard try to keep a secret; Sheldon and Amy stick together; and Koothrappali makes a new friend, as the gang travels together into an uncharted future.",
      "slug" => "episode281"
    ],
  ];

  public function load(ObjectManager $manager): void
  {
    foreach (self::EPISODES as $episode) {
      $seasonId = $episode['season_id'];
      $title = $episode['title'];
      $number = $episode['number'];
      $synopsis = $episode['synopsis'];
      $slug = $episode['slug'];

      $newEpisode = new Episode();
      $newEpisode->setSeason($this->getReference('season_' . $seasonId));
      $newEpisode->setTitle($title);
      $newEpisode->setNumber($number);
      $newEpisode->setSynopsis($synopsis);
      $newEpisode->setSlug($slug);
      $manager->persist($newEpisode);
    }

    $manager->flush();
  }

  public function getDependencies()
  {
    // Tu retournes ici toutes les classes de fixtures dont EpisodeFixtures dépend
    return [
      SeasonFixtures::class,
    ];
  }
}
