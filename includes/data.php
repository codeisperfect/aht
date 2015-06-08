<?php
	$subjects=array("Engineering"=>array("Machanical Engineering","Chemical Engineering"),"Computer Science"=>array("Database","Software") );
	$subjtopics=array("Machanical Engineering"=>array("Fluid Mech."),"Database"=>array("SQl","PQL"));

	$_ginfo["ip"]=$_SERVER["REMOTE_ADDR"];

$subt=array();
$subt["Science/Math"]=array(" Math"=>array(" Applied Mathematics ", " Calculus ", " Pre-Calculus ", " Algebra ", " Linear Algebra ", " Geometry ", " Trigonometry", " Discrete Mathematics ", " Topology ", " Others ")," Advanced Mathematics"=>array(" Data Modeling", " Bessel Functions ", "  Differential Equation", " String Theory", " Matrix Algebra", " Abstract/Modern Algebra ", " Integral Equation ", " Advanced Geometry ", " Engineering Mathematics ", " Others"),"Physics"=>array(" Classical Physics ", " Quantum Physics ", " Thermodynamics ", " General Physics", " Electromagnetic Theory ", " Waves and Sound ", " Statistical Mechanics ", " Calculus based Physics ", " Algebra based Physics ", " Theory of Relativity ", " Optics ", " Astronomy ", " Others "),"Biology"=>array(" Advanced Biology", " Applied Biology", " General Biology", " Zoology", " Genetics", " Microbiology ", " Microchemistry ", " Biotechnology ", " Botany ", " Anatomy ", " Immunology ", " Others "),"Chemistry"=>array(" Physical Chemistry", " Organic Chemistry", " Inorganic Chemistry", " Others"),"Earth Science"=>array(" Geography ", " Geomorphology", " Climatology", " Environmental Geography ", " Oceanology ", " Geophysics ", " Geology ", " Geotechnical Studies ", " Others "),);
$subt["Accounting"]=array("Financial Accounting"=>array(" Accounting Equation", " Accounting: Concepts and Principles", " Journalize", " Assets and Liabilities", " Trial Balance", " Income Statement", " Balance Sheet", " Adjusting Entries", " Accounting Cycle", " Accrual and Cash Basis", " Inventory Valuation: LIFO, FIFO, Lower of cost or market, LIFO dollar, Others", " Petty Cash", " Valuing Liabilities", " Depreciation and Depletion", " Amortization", " Cash Flow Statements", " Financial Analysis", " Valuation of Fixed Assets", " Impairment", " Valuation of Intangible Assets - Goodwill, Patents, Others", "Shareholder Equity", " Treasury Stock", " Dividends", " Valuing Investments", " Payroll Accounting", " Revenue Recognition", " Accounting for Pensions", " Leasing", " Others"),"Cost Management"=>array(" Cost Concept", " Cost Volume Profit Analysis", " Break Even Analysis", " Variable Costing", " Absorption Costing", " ABC Costing", " Process  Costing", " Job Costing", " Budgeting", "Variance Analysis", " Others"),"Managerial Accounting"=>array(" Performance Management", " Decision Making", " Incremental Analysis: Make or Buy, Special Order", " Pricing", " Budget Planning", " Others"),"Advanced Accounting"=>array(" Equity Method of Investment", " Consolidation Statements", " Partnership", " Others"),"Auditing"=>array(" Professional and Regulatory Organization", " Internal Control", " Audit Evidence", " Audit Test", " Sampling", " Management Fraud", " Forensic Accounting", " Auditing Revenue and Cycle", " Auditors Report", " Others"),"Others"=>array(" Accounting Information System", " Accounting for Government", " Taxation", " International Financial Reporting Standards", " Accounting Standard Codifications", " Statement of Financial Concepts"),);
$subt["Finance"]=array("Corporate Finance"=>array(" Financial Statement Analysis", " Financial Planning and Forecasting", " Ratio Analysis", " Time Value of Money", " Bond Valuation", " Stock Valuation", " Capital Budgeting", " Risk and Return", " Cost of Capital", " Working Capital Management", " Cash and Liquidity Management", " Credit and Inventory Management", " Leasing", " Others"),"Risk Management"=>array(" Risk Management Techniques", " Insurance", " Others"),"International Financial Management"=>array(" International Flow of Funds", " Derivatives", " Exchange Rate", " Exposures", " Hedging", " Swaps", " Arbitrage", " FOREX", " Options", " Futures", " Forwards", " Others"),"Others"=>array(" Investment Analysis and Portfolio Management", " Personal Finance", " Merger and Acquisition", " Behavioral Finance", " Business Valuation and Analysis", " Financial Markets and Institutes", " Entrepreneurial Finance", " Public Finance", " Others"),);
$subt["Engineering"]=array("Mechanical Engineering"=>array(" Fluid Mechanics", " Thermodynamics", " Strength of Materials", " Kinematics", " Design and Drafting", " Fluid Dynamics", " Others"),"Civil Engineering"=>array(" Truss", " Structures", " Materials Engineering", " Surveying &amp; Analysis", " Concrete Creation", " Geotechnical Design", " Others"),"Electrical Engineering"=>array(" Electrical Machines", " Electrical Measurement", " Power", " Signals &amp; Systems", " Communication Engineering", " Solid State Devices", " Control System", " Digital Electronics", " Others"),"Chemical Engineering"=>array(" Fluid Flow", " Quantitative Relations between Transfer Processes", " Nanotechnology", " Biomedical Engineering", " Preparation of Chemical Reactor", " Others"),);
$subt["Computer Science"]=array("Programming Languages"=>array(" Programming in C,C++", " Programming in Java", " Programming in .NET", " Internet Programming", " Programming in Python", " Programming in Assembly Language", " Others"),"Computer Network Security"=>array(" Cryptography", " IP Security Architecture", " Network Management Security", " Others"),"Automata or Computation"=>array(" Modules of Computation", " Turing Machine", " Complexity", " Others")," Database Management System"=>array(" ER-Modeling", " SQL/PSQL", " Oracle", " Data Normalization", " Others")," Computer Architecture"=>array(" Register, Transfer and Micro Operations ", " Basic Computer Organizations and Design", " Computer Arithmetic", " Memory Organization", " Others"),"Networking"=>array(" OSI and TCP/IP Models", " Digital Transmission", " Data Link Control Protocols", " ISDN", " Others"),"Operating System"=>array(" Memory Management", " Virtual Memory", " Deadlocks", " Device Management", " Others"),"Information Technology"=>array(" Assemblers", " Compilers", " Interpreters", " Linkers", " Network Topologies", " Others"),"Software Engineering"=>array(" Software Requirements Analysis and Specifications", " Software Project Management Concepts", " Software Design", " System Design", " Others"),"Data Structures"=>array(" Stacks and Queues", " Trees", " Linkers", " Others"),"Linux Environment"=>array(" UNIX", " LINUX", " LINUX File System", " Multiprocessing", " Others"),"Design and Analysis of Algorithms"=>array(" Mathematical Preliminaries", " Dynamic Programming", " Others"),"Computer Graphics and Multimedia Applications"=>array(" Clipping", " Geometrical Transformations", " Others"),);
$subt["Humanities"]=array("Sociology"=>array(" Origin and Development", " Nature and Scope ", " Social Change ", " Socialization", " Social Group", " Social Control", " Social Problem", " Research Method ", " Social Mobility", " Social interaction ", " Others "),"Psychology"=>array(" Basic Concepts", " Hereditary and Environment ", "Learning ", " Memory and forgetting ", " Intelligence ", " Others "),"Foreign language"=>array(" French ", " German ", " Spanish ", " Grammar ", "Basic Vocabulary", " Specialized Vocabulary ", " Travel Vocabulary ", " Others "),"Proofreading"=>array(" Professional Proofreading ", " Self Proofreading", " Others "),);
$subt["Management"]=array("Supply Chain Management / Operations Management"=>array(" Design of Product and Services", " Process Technology", " Enterprise Resource Planning", " JIT/Lean Production", " Linear Programming", " PERT", " Logistics", " Six Sigma", " Total Quality Management", " Material Resource Planning", " Decision Tree", " Value Engineering", " Inventory Management and Control", " Others"),"Human Resource Management"=>array(" Organization Behavior", " Human Resource Planning", " Compensation and Benefit", " Training and Development", " Organization Culture", " Strategic Human Resource Management", " Leadership", " Motivation", " Employee and Labor Relations", " Performance Appraisal", " Conflict and Negotiation", " Managing Organization Change"),"Marketing Management"=>array(" Marketing Strategy and Plan", " Environmental Scanning", " Market Research", " Consumer Behaviour", " Market Segmentation and Targeting", " Brand Management", " Retail Management", " Product Management", " Managing Services, Service Marketing", " Marketing Communication", " Marketing Mix", " Other"),"Strategic Management"=>array(" Five Force Model", " External Environment Scanning", " Internal Environment Analysis", " Competitors Analysis", " Business level Strategy / Generic Strategies", "Corporate Level Strategy", " Acquisition and Restructuring", " Others"),"Business Law and Ethics"=>array(" Employment Laws", " Anti-Trust Laws", " Business Laws", " Contract", " Others"),"IT Management"=>array(" Organizing IT Structure", " Knowledge Management", " Information System", " E-Business, E-Commerce", " Business Intelligence", " Others"),"Others"=>array(" International Business", " Business Communication", " Health Care Management", " Hospitality Management", " Others", " Business Ethics"),);
$subt["Economics"]=array("Micro Economics"=>array(" Demand and Supply", " Equilibrium of Demand and Supply", " Price Elasticity", " Income Elasticity", " Cross Price Elasticity", " Consumer Surplus", " Producer Surplus", " Externalities", " Law of Diminishing Marginal Utility", " Pure Competition", " Monopoly", " Oligopoly", " Monopolistic Competition", " Labour Markets and Wage Determination", " Anti-Trust Laws", " Others"),"Macro Economics"=>array(" National Income", " Gross Domestic Product", " Unemployment", " Inflation", " Keynesian Model", " IS-LM Model", " Multiplier Effect", " Aggregate Expenditure Model", " Aggregate Demand and Aggregate Supply", " AD-AS Model", " Monetary Policy", " Fiscal Policy", " Interest Rates", " Others"),"International Economics"=>array(" Trade Theories", " Comparative Advantage", " Absolute Advantage", " Heckscher-Ohlin Theory", " Foreign Direct Investment", " Tariffs and Subsidies", " Trade Policy", " Economic Integration", " Balance of Payment", " Exchange Rate", " Others")," Others"=>array(" Econometrics", " Environmental Economics", " Health Care Economics", " Others"),);
$subt["Statistics"]=array(" Basics of Statistics"=>array(" Theory of probability", " Others")," Sampling Theory"=>array("Simple Random Sampling", " Stratified Random Sampling", " Systematic Sampling", " Cluster Sampling", " Double sampling", " Others")," Descriptive Statistics"=>array(" Charts and diagrams", " Variance", " Standard deviation", " Skewness", " Kurtosis", " Percentiles and Quartiles", " Tree Diagrams", " Coefficient of Variance", " Others"),"Central Tendency"=>array(" Mean", " Median", " Mode", " Others")," Hypothesis Testing"=>array(" t,F,Z distibutions", " Chi square distributions", " Others")," ANOVA"=>array(" Applications of ANOVA", " Design of Experiments", " Factorial Experiments", " Others")," Regression"=>array(" Correlation, Regression", " Others")," Time Series Analysis"=>array(" Forecasting", " Exponential smoothing", " Others")," Operational Research"=>array(" Decision Making", " Queuing Theory", " Simulation", " Game Theory", " Assignment Problem", " Transportation Problem", " Project evaluation and review technique and Critical path(CPM_PERT analysis)", " Simplex", " Inventory management", " Others")," Stochastic processes"=>array("Markov Analysis", " Others")," Applied Statistics"=>array(" Index Numbers", " Vital Statistics", " Statistical Quality Control", " Psychological and Institutional Statistics", " Others"),"Others"=>array(" Linear models", "Biostatistics"),);
$subt["Writing"]=array("Academic writing"=>array(" Essay", " Term Paper", " Research Paper", " Book Report/Review or Movie Review", " Coursework", " Speech/Presentation", " Article Critique", " Annotated Bibliography", " Reaction Paper", " Application Paper"),"Dissertation and Thesis Services"=>array(" Dissertation", " Dissertation Chapter", " Thesis/Research Proposal", " Editing"),"Resume Services"=>array(" Resume Writing", " Resume Editing", " CV Writing", " CV Editing", " Cover Letter"),"Admission Services"=>array(" Personal Statement", " Admission Essay", " Scholarship Essay", " Admission Papers Editing"),);


$degrees=array('B.Tech', 'M. Tech', 'Phd', 'M.B.A', 'M.Sc.');

$_ginfo["services"]=array(
	"Assignment Help"=>"service.php?type=ah",
	"Homework Help"=>"service.php?type=hh",
	"Online Tutoring"=>"service.php?type=ot",
	"Web Development"=>"service.php?type=wd",
	);


$_ginfo["subjects"]=array(2=>"Physics",3=>"Chemistry",4=>"Science",5=>"Earth Science",6=>"Biology",7=>"Mathematics",8=>"Advance Mathematics",9=>"Algebra",10=>"History",12=>"Accounting Basics",13=>"Cost Accounting",14=>"Financial Accounting",15=>"Managerial Accounting",16=>"Accounting Standards",17=>"Auditing",18=>"Taxation",20=>"Finance Basics",21=>"Corporate Finance",22=>"Risk Management",23=>"Financial Management",24=>"Financial Econometrics",25=>"Portfolio Management",26=>"Business Law and Ethics",28=>"Microeconomics",29=>"Macroeconomics",30=>"Business Economics",31=>"Econometrics",32=>"International Economics",33=>"Managerial Economics",34=>"Game Theory",35=>"Public Economics",37=>"Basic Statistics",38=>"Applied Statistics",39=>"Advanced Statistics",40=>"Sampling Theory",41=>"Descriptive Statistics",42=>"Central Tendency",43=>"Hypothesis Testing",44=>"ANOVA",45=>"Time Series Analysis",46=>"Operational Research",47=>"Stochastic Processes",48=>"Others",50=>"Management Theories",51=>"Operation Management",52=>"HR Management",53=>"Project Management",54=>"Business Management",55=>"Operation Research",56=>"Supply Chain Management",57=>"Marketing Management",58=>"Marketing Research",59=>"Strategic Management",60=>"Management Information  System",61=>"Other Management",63=>"Biotechnology",64=>"Civil Engineering",65=>"Chemical Engineering",66=>"Computer Science Engineering",67=>"Electrical Engineering",68=>"Electronics",69=>"Engineering Mathematics",70=>"Engineering Physics",71=>"Information Technology",72=>"Textile",73=>"Mechanical Engineering",74=>"Other Engineering",76=>"Artificial Intelligence",77=>"Basic Computer Science",78=>"Computer Graphics",79=>"Computer Networking",80=>"Data Structure &amp; Algorithms",81=>"Database Management System",82=>"Operating System",83=>"Software Engineering",84=>"Theory of Computation",85=>"Computer Network Security",87=>"C/C++ Programming",88=>"JAVA Programming",89=>"DOT NET Programming",90=>"Assembly Language",91=>"Python Programming",92=>"COBOL Programming",93=>"Visual Basic Programming",94=>"PHP Web Programming",95=>"PL-SQL Programming",96=>"Programming Languages",98=>"Basic MATLAB Programming",99=>"MATLAB in Mathematics",100=>"MATLAB in Statistics",101=>"MATLAB in Engineering",102=>"Simulation in MATLAB",104=>"PHP",105=>"MySQL",106=>"Javascript",107=>"CSS",108=>"HTML",109=>"HTML-5",110=>"Ajax",112=>"Unix/Linux/GNU",131=>"Drupal",132=>"Joomla",133=>"Wordpress",115=>"Case Study",116=>"English",117=>"History",118=>"Human Resource",119=>"Humanities",120=>"Law",121=>"Medical Science",122=>"Nursing",123=>"Physiology",124=>"Political Science",125=>"Psychology",126=>"Religion",127=>"Social Science",128=>"Sociology",129=>"Solidworks",130=>"Term Paper");


$_ginfo["subjtree"]=array(
	"SCIENCE/MATH"=>array(array(2,"Physics"),array(3,"Chemistry"),array(4,"Science"),array(5,"Earth Science"),array(6,"Biology"),array(7,"Mathematics"),array(8,"Advance Mathematics"),array(9,"Algebra"),array(10,"History")),
	"ACCOUNTING"=>array(array(13,"Cost Accounting"),array(14,"Financial Accounting"),array(15,"Managerial Accounting"),array(16,"Accounting Standards"),array(17,"Auditing"),array(18,"Taxation")),
	"FINANCE"=>array(array(21,"Corporate Finance"),array(22,"Risk Management"),array(23,"Financial Management"),array(24,"Financial Econometrics"),array(25,"Portfolio Management"),array(26,"Business Law and Ethics")),
	"ECONOMICS"=>array(array(29,"Macroeconomics"),array(30,"Business Economics"),array(31,"Econometrics"),array(32,"International Economics"),array(33,"Managerial Economics"),array(34,"Game Theory"),array(35,"Public Economics")),
	"STATISTICS"=>array(array(38,"Applied Statistics"),array(39,"Advanced Statistics"),array(40,"Sampling Theory"),array(41,"Descriptive Statistics"),array(42,"Central Tendency"),array(43,"Hypothesis Testing"),array(44,"ANOVA"),array(45,"Time Series Analysis"),array(46,"Operational Research"),array(47,"Stochastic Processes"),array(48,"Others")),
	"MANAGEMENT"=>array(array(51,"Operation Management"),array(52,"HR Management"),array(53,"Project Management"),array(54,"Business Management"),array(55,"Operation Research"),array(56,"Supply Chain Management"),array(57,"Marketing Management"),array(58,"Marketing Research"),array(59,"Strategic Management"),array(60,"Management Information  System"),array(61,"Other Management")),
	"ENGINEERING"=>array(array(64,"Civil Engineering"),array(65,"Chemical Engineering"),array(66,"Computer Science Engineering"),array(67,"Electrical Engineering"),array(68,"Electronics"),array(69,"Engineering Mathematics"),array(70,"Engineering Physics"),array(71,"Information Technology"),array(72,"Textile"),array(73,"Mechanical Engineering"),array(74,"Other Engineering")),
	"COMPUTER SCIENCE"=>array(array(77,"Basic Computer Science"),array(78,"Computer Graphics"),array(79,"Computer Networking"),array(80,"Data Structure &amp; Algorithms"),array(81,"Database Management System"),array(82,"Operating System"),array(83,"Software Engineering"),array(84,"Theory of Computation"),array(85,"Computer Network Security")),
	"PROGRAMING"=>array(array(88,"JAVA Programming"),array(89,"DOT NET Programming"),array(90,"Assembly Language"),array(91,"Python Programming"),array(92,"COBOL Programming"),array(93,"Visual Basic Programming"),array(94,"PHP Web Programming"),array(95,"PL-SQL Programming"),array(96,"Programming Languages")),
	"MATLAB"=>array(array(99,"MATLAB in Mathematics"),array(100,"MATLAB in Statistics"),array(101,"MATLAB in Engineering"),array(102,"Simulation in MATLAB")),
	"WEB DEVELOPMENT"=>array(array(105,"MySQL"),array(106,"Javascript"),array(107,"CSS"),array(108,"HTML"),array(109,"HTML-5"),array(110,"Ajax")),
	"OPEN SOURCE"=>array(),
	"CMS"=>array(array(132,"Joomla"),array(133,"Wordpress")),
	"GENERAL"=>array(array(116,"English"),array(117,"History"),array(118,"Human Resource"),array(119,"Humanities"),array(120,"Law"),array(121,"Medical Science"),array(122,"Nursing"),array(123,"Physiology"),array(124,"Political Science"),array(125,"Psychology"),array(126,"Religion"),array(127,"Social Science"),array(128,"Sociology"),array(129,"Solidworks"),array(130,"Term Paper"))
);

$_ginfo["assign_status"]=array(
	1=>"Waiting for Admin",
	2=>"Under review",
	3=>"Waiting for payment",
	4=>"Expert is solving",
	5=>"Submitted",
	6=>"Failed"
	);

$_ginfo["notftype"]=array(
	0=>"Notification",
	1=>"Client uploaded Assignment",
	2=>"Admin replied on your assignment",
	3=>"Client Want to chat",
	4=>"Client replied on assignment conv.",
	5=>"New message on your assignment",
	6=>"New Assignment Matching your profile"
	);

$_ginfo["adminemail"]="admin@admin.com";

$_ginfo["isreloadchat"]=false;

$_ginfo["services"]=array(
	"General Help"=>array(
		"case-study-assignment"=>"Case Study Assignment",
		"english-homework"=>"English Homework",
		"history-homework"=>"History Homework",
		"human-resource-assignment-help"=>"Human Resource Assignment Help",
		"law-assignment-help"=>"Law Assignment Help",
		"nursing-assignment-help"=>"Nursing Assignment Help",
		"physiology-assignment-help"=>"Physiology Assignment Help",
		"psychology-assignment-help"=>"Psychology Assignment Help",
		"social-studies-help"=>"Social Studies Help",
		"sociology-assignment-help"=>"Sociology Assignment Help",
		"solidworks-assignment-help"=>"Solidworks Assignment Help",
		"term-paper-writing-service"=>"Term Paper Writing Service",
		"geography-help"=>"Geography Help",
		"coursework-help"=>"Coursework Help",
		"writing-assignment-help"=>"Writing Assignment Help",
		"academic-writing"=>"Academic Writing",
		"live-paper-help"=>"Live Paper Help",
		"dissertation-thesis-writing"=>"Dissertation Thesis Writing",
		"do-my-essay"=>"Do My Essay",
		"project-help"=>"Project Help",
		"student-assignment"=>"Student Assignment",
		"college-assignments"=>"College Assignments",
		"buy-assignment"=>"Buy Assignment"
	),
	"Management Help With"=>array(
		"assignment-management"=>"Assignment Management",
		"management-homework-help"=>"Management Homework Help",
		"business-management-assignment-help"=>"Business Management Assignment Help ",
		"economics-assignment-help"=>"Economics Assignment Help",
		"economics-homework"=>"Economics Homework",
		"finance-assignment"=>"Finance Assignment",
		"finance-homework"=>"Finance Homework",
		"marketing-assignment-help"=>"Marketing Assignment Help",
		"project-management-assignment-help"=>"Project Management Assignment Help",
		"custom-assignment"=>"Custom Assignment",
		"online-thesis-maker"=>"Online Thesis Maker",
		"assignment-helper"=>"Assignment Helper",
		"assignment-help-uk"=>" Assignment Help UK",
		"assignment-help-australia"=>"Assignment Help Australia",
		"homework-now"=>"Homework Now",
		"do-homework"=>"Do Homework",
		"homework-helper-online"=>"Homework Helper Online",
		"homework-live"=>"Homework Live",
		"homework-solutions"=>"Homework Solutions",
		"online-homework"=>"Online Homework"
	),
	"Assignment Help With"=>array(
		"accounting-assignment"=>"Accounting Assignment",
		"biology-help"=>"Biology Help",
		"biotechnology-assignment"=>"Biotechnology Assignment",
		"chemical-engineering-assignment-help"=>"Chemical Engineering Assignment Help",
		"chemistry-assignment-help"=>"Chemistry Assignment Help",
		"civil-engineering-assignment-help"=>"Civil Engineering Assignment Help",
		"computer-science-assignment-help"=>"Computer Science Assignment Help",
		"electrical-engineering-assignment-help"=>"Electrical Engineering Assignment Help",
		"electronics-help"=>"Electronics Help",
		"engineering-assignment-help"=>"Engineering Assignment Help",
		"geometry-assignment"=>"Geometry Assignment",
		"help-coding"=>"Help with Coding",
		"it-assignment-help"=>"IT Assignment Help",
		"it-security-assignment"=>"IT Security Assignment",
		"math-assignment"=>"Math Assignment",
		"matlab-assignment-help"=>"Matlab Assignment Help",
		"mechanical-engineering-help"=>"Mechanical Engineering Help",
		"online-calculus-helper"=>"Online Calculus  Helper",
		"programming-assignments-help"=>"Programming Assignments Help",
		"physics-assignment-help"=>"Physics Assignment Help",
		"science-assignment"=>"Science Assignment",
		"statistics-assignment"=>"Statistics Assignment",
		"assignment-expert"=>"Assignment Expert",
		"do-my-assignment"=>"Do My Assignment",
		"my-assignment-help"=>"My Assignment Help"
	),
	"Homework Help With"=>array(
		"accounting-homework"=>"Accounting Homework ",
		"biology-homework"=>"Biology Homework",
		"biochemistry-help"=>" Biochemistry Help",
		"chemical-engineering-homework-help"=>"Chemical Engineering Homework Help",
		"chemistry-homework"=>"Chemistry Homework",
		"civil-engineering-homework-help"=>"Civil Engineering Homework Help",
		"computer-science-homework"=>"Computer Science Homework ",
		"electrical-engineering-homework"=>"Electrical Engineering Homework",
		"engineering-homework-help"=>"Engineering Homework Help",
		"geometry-homework"=>"Geometry Homework",
		"math-homework-solver"=>"Math Homework Solver",
		"matlab-homework-help"=>"Matlab Homework Help",
		"discrete-mathematics-help"=>"Discrete Mathematics Help",
		"mechanical-engineering-homework"=>"Mechanical Engineering Homework",
		"physics-homework"=>"Physics Homework",
		"probability-help"=>"Probability Help",
		"programming-homework"=>"Programming Homework",
		"science-homework"=>"Science Homework",
		"statistics-homework"=>"Statistics Homework ",
		"high-school-homework"=>"High School Homework",
		"buy-homework"=>"Buy Homework",
		"college-homework"=>"College Homework",
		"do-my-homework"=>"Do My Homework",
		"homework-answers"=>"Homework Answers",
		"homework-assignment"=>"Homework Assignment"
	)
);




?>