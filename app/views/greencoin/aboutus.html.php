<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?>
<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3>About us</h3></div>
<div style="background-color:white;padding:10px">
<p><strong>GreenCoinX Inc</strong> <?=$t('is a subsidiary of GreenBank Capital Inc a Canadian public company (CSE:GBC and OTCMKTS:GRNBF) and is the developer of GreenCoinX (crypto currency symbol XGC) the world’s first crypto currency that requires users to be identified. GreenCoinX meets the same identification standards as the banking community, and makes the promise of crypto currency a reality by alleviating concerns that crooks and terrorists can use crypto currency to hide their activities. ')?></p>


<p><?=$t('To use XGC, please use the free XGC Online Wallet available at')?> <a href="https://xgcwallet.org" target="_blank">www.xgcwallet.org</a></p>

<p><?=$t('To use XGC on a mobile, please download the XGC Mobile wallet at')?> <a href="https://play.google.com/store/apps/details?id=org.xgcwallet.mobile" target="_blank">https://play.google.com/store/apps/details?id=org.xgcwallet.mobile</a></p>
<div class="row" style="padding:20px">
	<h3><?=$t('Our Leadership')?></h3>
	<h4><?=$t('Directors and Management')?></h4>
	<blockquote>
	<p><strong><?=$t('Daniel Wettreich is the Chairman & CEO of GreenCoinX.')?></strong>  <?=$t('He is a director and CEO of GreenBank Capital Inc a merchant bank publicly listed on the Canadian Securities Exchange. He is also a director  of five other CSE listed companies.  He has more than 40 years of experience in venture capital, private equity, and management of publicly traded companies.   He has been Chairman and CEO of Churchill Venture Capital LP, a Dallas, Texas private equity business, for more than 20 years. He has been a director of public companies listed on NASDAQ, the American Stock Exchange, the London Stock Exchange, the AIM Market of the London Stock Exchange, and the Vancouver Stock Exchange, a predecessor to the TSX Venture Exchange.  These public companies have been in diverse businesses in internet technologies, oil and gas, retailing, telecommunications, media, and real estate.   He has facilitated 13 reverse takeover transactions. He is a graduate of the University of Westminster with a BA in Business.')?>  </p>
	</blockquote>
	
	<blockquote>
	<p><strong><?=$t('Nilam Doctor is the President & Chief Technical Officer of GreenCoinX.')?></strong> <?=$t('He is the lead developer of GreenCoinX. Previously he was Owner of Hitarth Consultants a software consultancy firm focused on web based projects and digital currency. He was a Grant Committee Member of the Bitcoin Foundation promoting the Bitcoin protocol. He was also CEO of Real Bitcoins, an Indian based promoter of crypto currency. He has been a project manager and lead software developer for online educational companies, Learn without Limits, MobyMax, and Safal Education. He graduated with a MBA in Finance and a Bachelor of Engineering from Gujarat University.')?>
	</p>
	</blockquote>
	
	<blockquote>
	<p><strong><?=$t('Rares Pateanu is a director of GreenCoinX.')?></strong> <?=$t('He is a technology consultant and Course Director in Computer Sciences at York University in Toronto, Canada. He is an expert in cryptocurrency, blockchain and financial technology. Previously he was Executive Director of Morgan Stanley Enterprise Data Group, Senior Director Enterprise Architecture and Chief Architect at Rogers Communications, Vice President Architecture at CGI, and Head of Technology Cash Management Services at Bank of Montreal. He is President and a Director of the non-profit Metropolitan Toronto Condominium Corporation 690, and was a Director and Executive Vice President of the non-profit group Common, one of the largest computer user groups in the world with over 6,600 members. He obtained his Master of Science in Computer Science and Mathematics from the University of Cluj, Romania.')?></p>
	</blockquote>
	
	<blockquote>
	<p><strong><?=$t('David M. Lonsdale is a director of GreenCoinX.')?></strong> <?=$t('He is the President and CEO of The Lonsdale Group, a Dallas-based private investor in small cap companies. He is a director of GreenBank Capital Inc a Canadian merchant bank listed on the Canadian Securities Exchange. Previously he was for ten years the President of Allegiance Capital Corporation, a private investment bank focusing on mergers and acquisitions, with offices in Dallas, New York, and Chicago. Mr. Lonsdale has successfully built and sold three venture-funded information technology companies, including selling one of them to Microsoft. Earlier in his career he managed corporate divisions of McDonnell Douglas/Boeing and Dun & Bradstreet/A C Nielsen. He obtained his MBA in Finance & Marketing from Cornell University and his B.Sc. in Physics & Mathematics from Leeds Beckett University in the U.K.')?></p>
	</blockquote>
	<hr>
	<h4><?=$t('Advisory Board')?></h4>	
	


	<blockquote>
	<p><strong><?=$t('Rob Levy is Managing Director of Global Innovation Software Labs at PricewaterhouseCoopers (PwC), the worlds’ largest professional')?></strong> <?=$t('services business with offices in 157 countries and revenues of $34B, a Silicon Valley based investment and consulting firm, and Executive in Residence with PricewaterhouseCoopers (PwC), the worlds’ second largest professional services business with offices in 157 countries and revenues of $34B. Previously he was Chief Products Officer of Progress Software (NASDAQ:PRGS), an enterprise application development and deployment software company. He was Chief Technology Officer of BEA Systems (NASDAQ:BEAS, sold to Oracle in 2008 for $8.5B), an enterprise software company with revenues in excess of $1.5B, and Chief Technology Strategist of Computer Associates (NASDAQ:CA), which is one of the largest software companies in the world. He has previously been a director of Revelytix Inc, (sold to Teradata), an enterprise data company, CEO of Eyeona a software company marketing a retail pricing application, Managing Director US Operations of ItemField, a venture backed startup (sold to Informatica), and Senior Vice President of Nastel Technologies, an enterprise software company.')?> 
	</p>
	</blockquote>
	
	<blockquote>
	<p><strong><?=$t('David J. Robino is a private investor')?></strong> <?=$t('and corporate and nonprofit governance expert.  He was previously a non-executive director of Insight Enterprises, Inc., (NASDAQ: NSIT) a Fortune 500 global provider of information technology, and a non-executive director of Memec, Inc. then the world’s largest distributor of specialty electronics and semiconductors which was sold to Avnet, Inc., (NYSE: AVT).  Before those board roles, Mr. Robino served as the Vice Chairman of Gateway, Inc.  His earlier career was spent at The Maytag Corporation, Pepsi-Cola, AC Nielsen, and AT&T.  He has a B.A. from Graceland University and an M.S. from Iowa State University.  He currently teaches Business Ethics at Southern Oregon University.')?>	</p>
	</blockquote>
 
	<blockquote>
	<p><strong><?=$t('Kevin Kuykendall is a serial entrepreneur and is currently CEO of Vivione Biosciences Inc')?></strong>, <?=$t('a Canadian public company commercializing a bacteria testing technology. He is also CEO and Founder of Tripad LLC, a manufacturer of travel and photography accessories, and Chairman of Health2o Products LLC, a nutraceutical beverage and cosmeceutical skincare products business. Previously he was CEO and Founder of White Energy Company LLC, an ethanol producer.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Dwayne Walker is Senior VP at Rightside Group')?></strong>, <?=$t('a Nasdaq listed technology and domain services company. He has been a director, investor and executive at several technology and internet companies including iClick, Escrow.com, FreeShop.com, Micro General, US Connect, Network Commerce, DomainSponsor and Artemis Ventures. He was President of Nasdaq listed Fidelity National Information Solutions, a provider of banking, real estate and payment technologies. Previously he was Director of Sales and Marketing for Microsoft.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Bob Heckman is President of The Allen Group')?></strong>, <?=$t('a management consulting firm focused on business development and marketing. Previously he was Director of Business Development at Accenture (formerly Anderson Consulting), and he has held senior management positions at MTech and IBM. He is the author of Boardroom Selling: Proven Strategies for Selling to Decision Makers. He is a seasoned international  speaker at corporate sales meetings and industry conferences, and is a specialist at executive leadership coaching.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Johann Tse is CEO of Aquarian Capital')?></strong>, <?=$t('an advisory firm which specializes in strategic opportunities in China and with Chinese businesses overseas, from M&A advisory to developing renewable power plants, agribusinesses and natural resources as principals, with offices in Dallas, Beijing, Shanghai, Hong Kong and Tel Aviv. Previously he was Director for International M&A for Yum! Brands, and founded corporate venture capital program for Rohm and Haas Company. He held senior management positions with Swire Group, a UK/Hong Kong conglomerate, where he established 13 companies across numerous industries and was responsible for government relations and corporate development for China. He was the founding Deputy Chairman of the Hong Kong Chamber of Commerce in Shanghai, and was an Executive Director of the Hong Kong Chamber of Commerce in China. He is currently board member of Texas-Israel Chamber of Commerce, Dallas Business Club, and Executive Board Member of Circle Ten Council, Boy Scouts of America. He has an MBA from INSEAD, France, and a Bachelor of Science (Hons.) from the Chinese University of Hong Kong in Electronics Engineering.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Alan Molloy is CEO of GreenCoinX (Isle of Man) Limited')?></strong>, <?=$t('the European division of GreenCoinX. He is also an independent director of a number of financial sector companies in the Isle of Man and the United Kingdom and also provides business consultancy services. His business background is in wealth management. He is a member of the Investment Committee of Westbury Private Clients a UK investment management company and has previously been Chairman of Hillberry Trust Company Limited a fiduciary services company. He was previously the Managing Director of the international services of Duncan Lawrie, a British private bank. He is a Fellow of the Institute of Banking in Ireland, a Chartered Fellow of the UK Chartered Institute for Securities and Investment, a Chartered Wealth Manager and member of the Institute of Directors in Ireland. He is also a published author on investment related matters.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Vinnie Grosso is a telecommunications and entertainment industry veteran')?></strong> <?=$t('having held senior posts with NBC, AT&T, PRIMEDIA, and as CEO of start-up Into Networks. He is an established entrepreneur with “disruptive” technology and business models for streaming video, interactive television, video-on-demand, software-on-demand and mobile commerce for more than two decades. As President of "AT&T Downtown Digital"  he led the first interactive TV trials for AT&T, headed up NBC\'s efforts with TV affiliates on the Internet, led the technology effort for Primedia to distribute educational software by satellite and built the largest USA and Canadian distributor of broadband games for the cable industry at Into Networks. He is also recognized as a board member of The National Association of Television Program Executives, working the early business models for digital entertainment. He is currently a consultant to Fortune 500 Companies and start-ups alike.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Trevor Koverko is the CEO of Polymath Computer Solutions Inc')?></strong>, <?=$t('a virtual reality real estate marketing business. Previously he was CEO of eProf Education Inc a technology startup connecting educators and students in a virtual classroom. He is an early adopter of crypto currency with a diversified angel investor portfolio. He is retired from the New York Rangers where he was a draft pick in 2005, and previously played professional hockey in the Ontario Hockey League. He is a graduate from the University of Western Ontario-Richard Ivey School of Business.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Jim Taylor is Senior Solution Architect for Liaison Technologies Inc')?></strong>, <?=$t('a data integration and data security company. He was Chief Technology Officer of bTrade Inc a venture-funded software company focused on providing a secure platform for internet-based business transactions, which was purchased by Click Commerce. He previously was head of systems programming teams at Pier 1 Imports and Levi Strauss.')?>
	</p>
	</blockquote>
 
	<blockquote>
	<p><strong><?=$t('Joe Devich is a Partner at Newport Board Group')?></strong>, <?=$t('a national professional management services firm. He was previously Founder of TipApplause, a developer of mobile phone applications, and President of Knowberry, a web based utility focused on public safety. He was also President of three other technology companies, BizTube, Mosaix, and Asta Networks. He has held senior management positions with Covad Communications, Qwest Communications, Ameritech, and EDS.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('John G. Booth')?></strong>  <?=$t('is the Co-Founder and currently a Director and largest shareholder of Midpoint Holdings Ltd (TSXV:MPT) having stepped down as Chairman and CEO in late 2015.  Midpoint is the world’s first peer to peer Foreign Exchange matching platform which matches buyers and sellers at the midpoint of the relevant currency interbank cross rate via its US patented multi-party, multi-currency matching computerized business method.  John led the company from inception through to revenue and through various rounds of financing culminating with its listing on both the Toronto and Frankfurt exchanges. He is also Chairman of Laramide Resources (TSX:LAM), a director of Maya Gold & Silver (TSXV:MYA) and Tirex Resources (TSXV:TXX) where he was the nominee director for the European Bank for Reconstruction and Development for many years.  He has over 25 years’ experience in international finance as an investment banker, strategy consultant, lawyer and fund manager.  He has co-founded three financial services companies, and is a member in good standing of the bars of Ontario, New York and DC. He obtained his LLM in International Finance, Tax and Environmental Law from University of London, JD from University of Detroit, and LLB in Law from University of Windsor. ')?>
	</p>
	</blockquote>

	
</div>

</div>
</div>
