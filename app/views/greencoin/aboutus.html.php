<?php use lithium\core\Environment; 
if(substr(Environment::get('locale'),0,2)=="en"){$locale = "en";}else{$locale = Environment::get('locale');}
//if(strlen($locale>2)){$locale='en';}
// print_r(Environment::get('locale'));
// print_r($locale);
?>
<div style="margin:20px;padding:20px;">
<div style="background-color:white;padding:10px"><h3>About us</h3></div>
<div style="background-color:white;padding:10px">
<p><strong>GreenCoinX Inc</strong> <?=$t('is the developer of GreenCoinX (crypto currency symbol XGC) the world’s first crypto currency that requires users to be identified. GreenCoinX meets the same identification standards as the banking community, and makes the promise of crypto currency a reality by alleviating concerns that crooks and terrorists can use crypto currency to hide their activities. ')?></p>


<p><?=$t('To use XGC, please use the free XGC Online Wallet available at')?> <a href="https://xgcwallet.org" target="_blank">www.xgcwallet.org</a></p>

<p><?=$t('To use XGC on a mobile, please download the XGC Mobile wallet at')?> <a href="https://play.google.com/store/apps/details?id=org.xgcwallet.mobile" target="_blank">https://play.google.com/store/apps/details?id=org.xgcwallet.mobile</a></p>
<div class="row" style="padding:20px">
	<h3><?=$t('Our Leadership')?></h3>
	<h4><?=$t('Directors and Management')?></h4>
	<blockquote>
	<p><strong><?=$t('Daniel Wettreich is the Chairman & CEO of GreenCoinX.')?></strong>  <?=$t('He is a director and CEO of GreenBank Capital Inc a merchant bank publicly listed on the Canadian Securities Exchange. He has more than 40 years of experience in venture capital, private equity, and management of publicly traded companies.   He has been Chairman and CEO of Churchill Venture Capital LP, a Dallas, Texas private equity. He has been a director of public companies listed on NASDAQ, the American Stock Exchange, the London Stock Exchange, the AIM Market of the London Stock Exchange, and the Vancouver Stock Exchange, a predecessor to the TSX Venture Exchange.  These public companies have been in diverse businesses in internet technologies, oil and gas, retailing, telecommunications, media, and real estate.   He has facilitated 13 reverse takeover transactions. He is a graduate of the University of Westminster with a BA in Business.')?>  </p>
	</blockquote>
	
	<blockquote>
	<p><strong><?=$t('Nilam Doctor is the President & Chief Technical Officer of GreenCoinX.')?></strong> <?=$t('He is the lead developer of GreenCoinX. Previously he was Owner of Hitarth Consultants a software consultancy firm focused on web based projects and digital currency. He was a Grant Committee Member of the Bitcoin Foundation promoting the Bitcoin protocol. He was also CEO of Real Bitcoins, an Indian based promoter of crypto currency. He has been a project manager and lead software developer for online educational companies, Learn without Limits, MobyMax, and Safal Education. He graduated with a MBA in Finance and a Bachelor of Engineering from Gujarat University.')?>
	</p>
	</blockquote>
	
	<blockquote>
	<p><strong><?=$t('David M. Lonsdale is a director of GreenCoinX.')?></strong> <?=$t('He is the President and CEO of The Lonsdale Group, a Dallas-based private investor in small cap companies. He is a director of GreenBank Capital Inc a Canadian merchant bank listed on the Canadian Securities Exchange. Previously he was for ten years the President of Allegiance Capital Corporation, a private investment bank focusing on mergers and acquisitions, with offices in Dallas, New York, and Chicago. Mr. Lonsdale has successfully built and sold three venture-funded information technology companies, including selling one of them to Microsoft. Earlier in his career he managed corporate divisions of McDonnell Douglas/Boeing and Dun & Bradstreet/A C Nielsen. He obtained his MBA in Finance & Marketing from Cornell University and his B.Sc. in Physics & Mathematics from Leeds Beckett University in the U.K.')?></p>
	</blockquote>
	<hr>
	<h4><?=$t('Advisory Board')?></h4>	
	


	<blockquote>
	<p><strong><?=$t('David J. Robino is a private investor')?></strong> <?=$t('and corporate and nonprofit governance expert.  He was previously a non-executive director of Insight Enterprises, Inc., (NASDAQ: NSIT) a Fortune 500 global provider of information technology, and a non-executive director of Memec, Inc. then the world’s largest distributor of specialty electronics and semiconductors which was sold to Avnet, Inc., (NYSE: AVT).  Before those board roles, Mr. Robino served as the Vice Chairman of Gateway, Inc.  His earlier career was spent at The Maytag Corporation, Pepsi-Cola, AC Nielsen, and AT&T.  He has a B.A. from Graceland University and an M.S. from Iowa State University.  He currently teaches Business Ethics at Southern Oregon University.')?>	</p>
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
	<p><strong><?=$t('Alan Molloy is an independent director')?></strong><?=$t('  of a number of financial sector companies in the Isle of Man and the United Kingdom and also provides business consultancy services. His business background is in wealth management. He is a member of the Investment Committee of Westbury Private Clients a UK investment management company and has previously been Chairman of Hillberry Trust Company Limited a fiduciary services company. He was previously the Managing Director of the international services of Duncan Lawrie, a British private bank. He is a Fellow of the Institute of Banking in Ireland, a Chartered Fellow of the UK Chartered Institute for Securities and Investment, a Chartered Wealth Manager and member of the Institute of Directors in Ireland. He is also a published author on investment related matters.')?>
	</p>
	</blockquote>

	<blockquote>
	<p><strong><?=$t('Jim Taylor is Senior Solution Architect ')?></strong><?=$t('for Liaison Technologies Inc')?></strong>, <?=$t('a data integration and data security company. He was Chief Technology Officer of bTrade Inc a venture-funded software company focused on providing a secure platform for internet-based business transactions, which was purchased by Click Commerce. He previously was head of systems programming teams at Pier 1 Imports and Levi Strauss.')?>
	</p>
	</blockquote>

</div>

</div>
</div>
