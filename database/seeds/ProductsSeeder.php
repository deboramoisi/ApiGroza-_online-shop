<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'Miere de salcam 1kg',
        	'category' => 'Produse_apicole',
        	'quantity' => 100,
        	'gramaj' => 1000,
        	'description' => '<p>Mierea de salcam este o miere care, dupa cum se poate ghici, derivÄƒ din planta de salcam, o planta medicinala apartinand familiei Fabaceae. </p><p> Ca aspect, mierea de salcam are o culoare foarte clara si o consistenta destul de lichida, fara cristale. Mirosul ei este dulce si floral. Gustul sau este dulce si delicat. Cristalizeaza incet, 1-2 ani de la extractie. Capacitatea sa de a ramane intr-o stare lichida pentru o perioada lunga de timp, alaturi de culoarea ei foarte clara, si ofera un aspect comercial deosebit si duce la o dorinta irezistibila de a va scufunda degetele chiar in borcanelul cu miere de salcam.</p>',
        	'prop_car' => '<p>In plus fata de utilizarea ca indulcitor in loc de zahar, produsele din miere de salcam au si alte utilizari datorita proprietatilor lor benefice. In primul rand, este un produs natural energizant, furnizand sistemului nervos o zi plina de energie. Mierea de salcam este caracterizata de un continut ridicat de proteine, saruri minerale, vitamine si aminoacizi. Aceasta combinatie naturala face ca acest sortiment de miere sa fie un tonic excelent. Mierea de salcam, in plus, este un remediu care poate fi de asemenea utilizat de catre diabetici, deoarece continutul de zahar deriva in cea mai mare parte din fructoza, care nu are nevoie de insulina pentru a fi metabolizata. </p><p> Are o actiune de detoxifiere care ajuta la mentinerea sanatatii ficatului.</p>',
        	'image' => 'public/img/honey1.jpg',
        	'price' => '40.00'
        ]);
        DB::table('products')->insert([
        	'name' => 'Miere de rapita 1kg', 
        	'category' => 'Produse_apicole', 
        	'quantity' => 100, 
        	'gramaj' => 1000, 
        	'description' => '<p>Aceasta este o miere monoflorÄƒ, adicÄƒ este produsÄƒ Ã®n cea mai mare parte din nectar È™i, uneori, din polenul de flori de rapiÈ›Äƒ. Mierea de rapiÅ£Äƒ este colectatÄƒ Ã®n luna mai ÅŸi este una dintre primele recolte de miere ale anului. Acest tip de miere are cÃ¢teva caracteristici unice, cum ar fi un timp de cristalizare rapid È™i un gust delicios, fiind preferatÄƒ de mulÈ›i iubitori de miere, deoarece nu este foarte dulce.</p>', 
        	'prop_car' => '<p>Mierea de rapiÈ›Äƒ are proprietÄƒÈ›i de vindecare, fiind recomandatÄƒ pentru tratarea problemelor de sÄƒnÄƒtate a rinichilor precum ÅŸi a bolilor legate de ochi. Uleiul de plante de rapiÅ£Äƒ conÅ£ine Q3, un element extrem de important pentru dezvoltarea osoasÄƒ. Din acest motiv, mierea de rapiÈ›Äƒ este utilizatÄƒ pentru a trata osteoporoza. De asemenea, ajutÄƒ la regenerarea È™i menÈ›inerea elasticitÄƒÈ›ii pereÈ›ilor vasculari. Consumul de miere din rapiÈ›Äƒ protejeazÄƒ ficatul, splina È™i pancreasul de diverse boli. Este recomandat persoanelor care suferÄƒ de arsuri la stomac datoritÄƒ aciditÄƒÈ›ii foarte scÄƒzute.</p><p>\r\nAbundenÈ›a vitaminei E Ã®n acest produs natural este de o importanÈ›Äƒ primordialÄƒ atunci cÃ¢nd vine vorba de Ã®ncetinirea Ã®mbÄƒtrÃ¢nirii pielii, care va arÄƒta vitalÄƒ È™i sÄƒnÄƒtoasÄƒ ca urmare a consumului de miere de rapiÈ›Äƒ.</p>', 
        	'image' => 'public/img/rapita_ursulet.jpeg', 
        	'price' => 30.00
        ]);
        DB::table('products')->insert([
        	'name' => 'Miere de tei 1kg', 
        	'category' => 'Produse_apicole',
        	'quantity' => 50, 
        	'gramaj' => 1000, 
        	'description' => '<p>Iunie este luna centralÄƒ a Ã®nfloririi unei alte surse nectarifere importante pentru albine, care produc o miere apreciatÄƒ atÃ¢t pentru gustul sÄƒu, cÃ¢t È™i pentru diferitele sale proprietÄƒÈ›i benefice: mierea de tei.</p><p>\r\nPlanta rÄƒspÃ¢nditÄƒ Ã®n Ã®ntreaga EuropÄƒ, arborele de tei este folosit pe scarÄƒ largÄƒ Ã®n fitoterapie pentru proprietÄƒÈ›ile sale calmante È™i pentru decongestionarea cÄƒilor respiratorii.</p><p>\r\nAre o culoare galben deschis care se Ã®ntunecÄƒ cu timpul. Ca toate tipurile de miere, ea Ã®n mod natural tinde spre cristalizare, deÈ™i pentru mierea de tei este o operaÈ›ie care are loc destul de Ã®ncet. OdatÄƒ cristalizatÄƒ, mierea de tei devine alb-fildeÈ™. La gust are o aromÄƒ proaspÄƒtÄƒ, dulce, aromatÄƒ, care aminteÈ™te de plantele de munte È™i mentÄƒ, pÄƒstrÃ¢nd o anumitÄƒ intensitate È™i persistenÈ›Äƒ.</p>', 
        	'prop_car' => 'Mierea de tei este beneficÄƒ pentru organism, cu o gamÄƒ largÄƒ de aplicaÅ£ii. Este utilizatÄƒ Ã®n principal ca diaforetic Ã®n tratarea rÄƒceliilor È™i a febrei. Calitatea antibacterianÄƒ a mierii de tei o face idealÄƒ pentru controlul inflamaÈ›iei organelor respiratorii. Este de asemenea folositÄƒ ca un agent fortificant È™i susÈ›ine inima. Se aplicÄƒ extern pentru a ajuta la vindecarea rÄƒnilor pe piele, eczeme È™i arsuri. Zaharurile naturale din miere au efect prebiotic, alimentÃ¢nd bacteriile bune din sistemul digestiv. Mierea de tei este un tonic natural, creÈ™te nivelul de energie È™i Ã®mbunÄƒtÄƒÈ›eÅŸte sistemul imunitar. ConsistenÈ›a vÃ¢scoasÄƒ a mierii Ã®i permite sÄƒ se lipeascÄƒ de cÄƒptuÈ™eala gÃ¢tului, iar aceastÄƒ capacitate, Ã®mpreunÄƒ cu proprietÄƒÈ›ile sale antibacteriene, face ca mierea de tei sÄƒ fie un remediu excelent pentru dureri Ã®n gÃ¢t È™i tuse.', 
        	'image' => 'public/img/tei.png', 
        	'price' => 31.00
        ]);
        DB::table('products')->insert([
        	'name' => 'Miere de zmeura 420g', 
        	'category' => 'Produse_apicole', 
        	'quantity' => 40, 
        	'gramaj' => 420, 
        	'description' => '<strong>Miere de zmeurÄƒ</strong> â€“ este o miere bio parfumatÄƒ, cu aromÄƒ de zmeurÄƒ, obÈ›inutÄƒ de cÄƒtre apicultori prin plasarea stupilor de albine lÃ¢ngÄƒ culturile intense de zmeurÄƒ, Ã®n lunile iunie-iulie, perioada de florenscenÈ›Äƒ a zmeurei.<p>\r\n<strong>Mierea de zmeurÄƒ</strong> o miere Ã®n care uneori pot fi gÄƒsite particule de polen, rezultÃ¢nd astfel o miere cu aromÄƒ mai puternicÄƒ.</p>', 
        	'prop_car' => '', 
        	'image' => 'public/img/zmeura.png',
        	'price' => 23.00
        ]);
        DB::table('products')->insert([
        	'name' => 'Combinezon apicol', 
        	'category' => 'Echipamente', 
        	'quantity' => 15, 
        	'gramaj' => 0, 
        	'description' => '<p>Combinezon apicol din bumbac cu masca detasabila. Sistemul de prindere al mastii este prin doua fermuare, iar masca se poate detasa complet pentru spalarea combinezonului in masina de spalat.</p><p>Are fermuar vertical folosit la imbracarea combinezonului, maneci si picioare prevazute cu elastic pentru a impiedica intrarea albinelor, buzunare la pantalon si piept.</p><p>Un model de combinezon practic si usor de utilizat.</p>', 
        	'prop_car' => '', 
        	'image' => 'public/img/combinezon.jpg', 
        	'price' => 150.00
		]);
		DB::table('products')->insert([
			'name' => 'Crema antiaging ten sensibil', 
			'category' => 'Cosmetice',
			'quantity' => 30,
			'gramaj' => 50,
			'description' => 'Crema este ideala pentru tenurile sensibile, reactive si intolerante, deoarece calmeaza, ofera o senzatie de prospetime si confort, reduce sau previne aparitia rosetei. Are efect antiinflamator, antiiritant, reparator, hidratant, antioxidant si antiaging. Protejeaza pielea sensibila de efectele nocive ale poluarii, care au efect iritant si previne procesele de imbatranire cauzate de stresul oxidativ.', 
			'prop_car' => '',
			'image' => 'public/img/crema_aa_sensibil_50ml.jpg', 
			'price' => 51.00
		]);
		DB::table('products')->insert([
			'name' =>'Laptisor de matca 10g',
			'category' => 'Produse_apicole',
			'quantity' => 44,
			'gramaj' => 10,
			'description' => '<p><strong>Laptisorul de matca</strong> este unul dintre cele mai valoroase produse apicole deoarece contine substanta activa Acid 10-HDA- prezenta exclusiv in laptisorul de matca pur, care ofera efecte antibacteriene, antifungice si antivirale, contribuind astfel la buna functionare a sistemului imunitar.</p><p>Este singura sursa naturala de Acetilcolina, care faciliteaza transmiterea influxului nervos intre neuroni.</p><p>Contine polifenoli care au efect antioxidant si contribuie la eliminarea radicalilor liberi.</p><p>Este sursa de vitamine din complexul B, indispensabile pentru buna functionare a organismului (B1, B2, B3, B6), in special vitamina B5 (acidul pantotenic), supranumita â€œvitamina antistresâ€.</p><p>Contine toata gama de aminoacizi esentiali (in special prolina si lizina) pe care organismul nu ii poate sintetiza, desi sunt necesari intr-o alimentatie zilnica echilibrata.</p><p>Se recomanda consumul primavara si toamna in cure de 6-8 saptamani, insa se poate utiliza fara restrictii pe tot timpul anului.</p>',
			'prop_car' => '<strong>Beneficiile produsului: </strong>\r\n<p><strong>UZ INTERN:</strong></p><ul>\r\n<li>Vitalizant, imunomodulator, contribuie la buna functionare a sistemului imunitar;</li>\r\n<li>Are efect antioxidant si intarzie procesele de imbatranire;</li>\r\n<li>Tonic in perioadele de oboseala fizica si psihica, tulburari de memorie;</li>\r\n<li>Tulburari de menstruatie sau menopauza;</li>\r\n<li>Ajuta la protejarea ficatului;</li>\r\n<li>Mentine valorile normale ale tensiunii arteriale si colesterolului din sange;</li>\r\n<li>Remineralizant pentru unghii si par.</li></ul>\r\n<p><strong>UZ EXTERN:</strong></p><ul>\r\n<li>Este folosit in prepararea cremelor si mastilor de fata.</li>\r\n<li>Stimuleaza producerea colagenului natural;</li>\r\n<li>Regenereaza tesutul epitelial;</li>\r\n<li>Incetineste procesul de imbatranire;</li>\r\n<li>Diminueaza ridurile existente si previne aparitia altora noi;</li>\r\n<li>Mentine elasticitatea si fermitatea tenului;</li>\r\n<li>Hidrateaza tenul;</li>\r\n<li>Diminueaza acneea.</li></ul>',
			'image' => 'public/img/laptisor_10g.jpg',
			'price' => 10.00
		]);
		DB::table('products')->insert([
			'name' => 'Laptisor de matca 100g',
			'category' => 'Produse_apicole',
			'quantity' => 20,
			'gramaj' => 100,
			'description' => '<p><strong>Laptisorul de matca</strong> este unul dintre cele mai valoroase produse apicole deoarece contine substanta activa Acid 10-HDA- prezenta exclusiv in laptisorul de matca pur, care ofera efecte antibacteriene, antifungice si antivirale, contribuind astfel la buna functionare a sistemului imunitar.</p><p>Este singura sursa naturala de Acetilcolina, care faciliteaza transmiterea influxului nervos intre neuroni.</p><p>Contine polifenoli care au efect antioxidant si contribuie la eliminarea radicalilor liberi.</p><p>Este sursa de vitamine din complexul B, indispensabile pentru buna functionare a organismului (B1, B2, B3, B6), in special vitamina B5 (acidul pantotenic), supranumita â€œvitamina antistresâ€.</p><p>Contine toata gama de aminoacizi esentiali (in special prolina si lizina) pe care organismul nu ii poate sintetiza, desi sunt necesari intr-o alimentatie zilnica echilibrata.</p><p>Se recomanda consumul primavara si toamna in cure de 6-8 saptamani, insa se poate utiliza fara restrictii pe tot timpul anului.</p>',
			'prop_car' => '<strong>Beneficiile produsului: </strong>\r\n<p><strong>UZ INTERN:</strong></p><ul>\r\n<li>Vitalizant, imunomodulator, contribuie la buna functionare a sistemului imunitar;</li>\r\n<li>Are efect antioxidant si intarzie procesele de imbatranire;</li>\r\n<li>Tonic in perioadele de oboseala fizica si psihica, tulburari de memorie;</li>\r\n<li>Tulburari de menstruatie sau menopauza;</li>\r\n<li>Ajuta la protejarea ficatului;</li>\r\n<li>Mentine valorile normale ale tensiunii arteriale si colesterolului din sange;</li>\r\n<li>Remineralizant pentru unghii si par.</li></ul>\r\n<p><strong>UZ EXTERN:</strong></p><ul>\r\n<li>Este folosit in prepararea cremelor si mastilor de fata.</li>\r\n<li>Stimuleaza producerea colagenului natural;</li>\r\n<li>Regenereaza tesutul epitelial;</li>\r\n<li>Incetineste procesul de imbatranire;</li>\r\n<li>Diminueaza ridurile existente si previne aparitia altora noi;</li>\r\n<li>Mentine elasticitatea si fermitatea tenului;</li>\r\n<li>Hidrateaza tenul;</li>\r\n<li>Diminueaza acneea.</li></ul>',
			'image' => 'public/img/laptisor_100g.jpg',
			'price' => 113.00
		]);
		DB::table('products')->insert([
			'name' => 'Pastura 500g',
			'category' => 'Produse_apicole',
			'quantity' => 10,
			'gramaj' => 150,
			'description' => 'Pastura este polenul crud fermentat in stup, timp de 3 luni, in conditii naturale. Un produs cu insusiri valoroase date de continutul mare in zaharuri simple, enzime si aminoacizi, precum si a aciditatii sporite, ce o face usor accesibila. Fata de polen, valoarea nutritive si antibiotica a pasturii este de 4 ori mai mare.',
			'prop_car' => '<p><strong>Beneficiile produsului:</strong></p><ul>\r\n<li>Este un tonic general cu actiune mai puternica decat a polenului;</li>\r\n<li>Datorita metabolizarii mai rapide si mai complete, amelioreaza starile de slabiciune cauzate de oboseala si stres;</li>\r\n<li>Ajuta la intarirea sistemului imunitar;</li></ul>',
			'image' => 'public/img/pastura_500g.jpg',
			'price' => 150.00
		]);
		DB::table('products')->insert([
			'name' => 'Polen uscat 200g',
			'category' => 'Produse_apicole',
			'quantity' => 33,
			'gramaj' => 200,
			'description' => 'Polenul uscat este considerat un super-aliment datorita continutului ridicat de enzime, antioxidanti, vitamine si minerale, care sunt foarte hranitoare si ajuta organismul sa lupte impotriva afectiunilor.  ',
			'prop_car' => '<p><strong>Beneficiile produsului:</strong> </p><ul><li>Vitaminizant si mineralizant;</li><li>Combate oboseala, ajutand la cresterea nivelului de energie;</li><li>Regleaza tranzitul intestinal, datorita continutului bogat in fibre</li></ul>',
			'image' => 'public/img/polen_200g.jpg',
			'price' => 16.00
		]);
		DB::table('products')->insert([
			'name' => 'Polen crud paducel 250g',
			'category' => 'Produse_apicole',
			'quantity' => 13,
			'gramaj' => 250,
			'description' => '<strong>Polenul crud de Paducel</strong> este un protector al inimii si al circulatiei sangvine. Polenul crud de albine este un aliment VIU si este considerat un panaceu pe care natura il pune la dispozitia noastra, datorita continutului de vitamine (A, beta-carotenoide, E, grupul vitaminelor B), minerale, aminoacizi, bioflavonoide precum si probiotice, lactofermenti si bifidobacterii. ',
			'prop_car' => '<p><strong>Beneficiile produsului: </strong></p><ul><li>Efect antioxidant, contribuind la regenerarea celulelor impotriva stresului oxidativ;</li><li>Sustine sistemul imunitar in perioadele de suprasolicitare psihica si fizica;</li><li>Protejeaza sistemul cardiovascular si mentine valorile normale ale tensiunii arteriale;</li><li>Ajuta la functionarea normala a sistemului nervos.</li></ul>',
			'image' => 'public/img/polen_crud_paducel_250g.jpg',
			'price' => 23.00
		]);
		DB::table('products')->insert([
			'name' => 'Ser intensiv antiacnee 30 ml',
			'category' => 'Cosmetice',
			'quantity' => 30,
			'gramaj' => 30,
			'description' => '<p>Serul este un produs concentrat, bogat in ingrediente active naturale cu efect intensiv antiacnee.</p>\r\n<p>Serul Apiterra contine un complex de 5 active eficiente in combaterea acneei, care actioneaza in sinergie: reduc productia de sebum si inflamatiile, previn inrosirea pielii, calmeaza tenul iritat si regenereaza celulele epiteliale. Propolisul este cel mai eficient antibiotic natural datorita proprietatilor sale antibacteriene. Extractul de propolis este obtinut printr-o metoda inovativa brevetata. Studiile clinice arata ca reduce leziunile acneice si productia de sebum. Extractul de salcie are un continut ridicat de salicilati naturali care amelioreaza inflamatiile si roseata, au efect antimicrobian si stimuleaza regenerarea celulara. Argintul colloidal este un ingredient natural cu efect rapid, care distruge membrana celulara a fungilor si bacteriilor. Mierea de manuka este recunoscuta pentru proprietatile sale antiinflamatoare si calmante.</p>\r\n<p>Extractul de castravete improspateaza pielea,are efect astringent, revitalizant si antiaging.</p><p>Acidul hialuronic pur cu greutate moleculara mica retine apa in straturile profunde ale pielii, asigurand hidratarea in profunzime a epidermei, reducerea vizibila a liniilor fine si recastigarea elasticitatea pielii</p><p>Coenzima Q10 si laptisorul de matca BIO au capacitatea de a diminua efectele radicalilor liberi asupra celulelor si stimuleaza productia compusilor esentiali ai pielii, prevenind astfel imbatranirea si aparitia ridurilor.</p>',
			'prop_car' => '',
			'image' => 'public/img/ser_acnee.jpg',
			'price' => 61.00
		]);
		DB::table('products')->insert([
			'name' => 'Scrub de fata 75ml',
			'category' => 'Cosmetice',
			'quantity' => 31,
			'gramaj' => 75,
			'description' => 'Scrubul de fata exfoliaza bland, indepartand impuritatile, excesul de sebum si celulele moarte. Stimuleaza regenerarea celulara, incetinand procesele de imbatranire ale pielii, lasa pielea fina, catifelata si radianta.',
			'prop_car' => '',
			'image' => 'public/img/scrub.jpg',
			'price' => 31.00
		]);
		DB::table('products')->insert([
			'name' => 'Matca imperecheata natural',
			'category' => 'Matci',
			'quantity' => 10,
			'gramaj' => 0,
			'description' => '<ul><li>Clipate (taierea aripilor pana la indicele cubital) - la cerere in schimbul sumei de 5 lei pe bucata.</li>\r\n<li>marcate 2021, 2022, 2023, 2019, 2020</li>\r\n<li>obtinute prin transvazare</li>\r\n<li>ne preocupa in principal cresterea trantorilor de care depinde calitatea matcilor.</li>',
			'prop_car' => '',
			'image' => 'public/img/matca.jpeg',
			'price' => 86.00
		]);
		DB::table('products')->insert([
			'name' => 'Familie de albine',
			'category' => 'Familii',
			'quantity' => 10,
			'gramaj' => 0,
			'description' => 'Stupii sunt dotati cu : fund(soclu) antivaroua cu plasa din aluminiu, subar din tabla zincata, corp cu suport din aluminiu pentru rame, cat cu 10 rame din plastic crescute si suport pentru rame din aluminiu, podisor, hranitor, gratie hanneman si capac invelit cu tabla zincata. Stupii sunt vopsiti si au o vechime de 3 ani.',
			'prop_car' => '',
			'image' => 'public/img/stup_deschis.jpeg',
			'price' => 500.00
		]);
    }	
}
