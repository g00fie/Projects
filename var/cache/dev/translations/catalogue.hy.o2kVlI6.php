<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Արժեքը պետք է լինի սխալ։',
    'This value should be true.' => 'Արժեքը պետք է լինի ճիշտ։',
    'This value should be of type {{ type }}.' => 'Արժեքը պետք է լինի {{ type }} տեսակի։',
    'This value should be blank.' => 'Արժեքը պետք է լինի դատարկ։',
    'The value you selected is not a valid choice.' => 'Ձեր ընտրած արժեքը անվավեր ընտրություն է։',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Դուք պետք է ընտրեք ամենաքիչը {{ limit }} տարբերակներ։',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Դուք պետք է ընտրեք ոչ ավելի քան {{ limit }} տարբերակներ։',
    'One or more of the given values is invalid.' => 'Մեկ կամ ավելի տրված արժեքները անվավեր են։',
    'This field was not expected.' => 'Այս դաշտը չի սպասվում։',
    'This field is missing.' => 'Այս դաշտը բացակայում է։',
    'This value is not a valid date.' => 'Արժեքը սխալ ամսաթիվ է։',
    'This value is not a valid datetime.' => 'Ամսաթվի և ժամանակի արժեքը անվավեր է։',
    'This value is not a valid email address.' => 'Անվավեր էլ֊փոստի արժեք։',
    'The file could not be found.' => 'Նիշքը չի գտնվել։',
    'The file is not readable.' => 'Նիշքը անընթեռնելի է։',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է ({{ size }} {{ suffix }}): Մաքսիմալ թույլատրելի չափսը՝ {{ limit }} {{ suffix }}։',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-տեսակը անվավեր է է({{ type }}): Նիշքերի թույլատրելի MIME-տեսակներն են: {{ types }}։',
    'This value should be {{ limit }} or less.' => 'Արժեքը պետք է լինի {{ limit }} կամ փոքր։',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Արժեքը չափազանց երկար է: Պետք է լինի {{ limit }} կամ ավել սիմվոլներ։',
    'This value should be {{ limit }} or more.' => 'Արժեքը պետ է լինի {{ limit }} կամ շատ։',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Արժեքը չափազանց կարճ է: Պետք է լինի {{ limit }} կամ ավելի սիմվոլներ։',
    'This value should not be blank.' => 'Արժեքը չպետք է դատարկ լինի։',
    'This value should not be null.' => 'Արժեքը չպետք է լինի null։',
    'This value should be null.' => 'Արժեքը պետք է լինի null։',
    'This value is not valid.' => 'Անվավեր արժեք։',
    'This value is not a valid time.' => 'Ժամանակի արժեքը անվավեր է։',
    'This value is not a valid URL.' => 'Արժեքը  URL  չէ։',
    'The two values should be equal.' => 'Երկու արժեքները պետք է նույնը լինեն։',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է: Մաքսիմալ թույլատրելի չափսը {{ limit }} {{ suffix }} է։',
    'The file is too large.' => 'Նիշքը չափազանց մեծ է։',
    'The file could not be uploaded.' => 'Նիշքը չի կարող բեռնվել։',
    'This value should be a valid number.' => 'Արժեքը պետք է լինի թիվ։',
    'This value is not a valid country.' => 'Արժեքը պետք է լինի երկիր։',
    'This file is not a valid image.' => 'Նիշքը նկարի վավեր ֆորմատ չէ։',
    'This is not a valid IP address.' => 'Արժեքը վավեր IP հասցե չէ։',
    'This value is not a valid language.' => 'Արժեքը վավեր լեզու չէ։',
    'This value is not a valid locale.' => 'Արժեքը չի հանդիսանում վավեր տեղայնացում։',
    'This value is already used.' => 'Այդ արժեքն արդեն օգտագործվում է։',
    'The size of the image could not be detected.' => 'Նկարի չափսերը չստացվեց որոշել։',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Նկարի լայնությունը չափազանց մեծ է({{ width }}px). Մաքսիմալ չափն է {{ max_width }}px։',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Նկարի լայնությունը չափազանց փոքր է ({{ width }}px). Մինիմալ չափն է {{ min_ width }}px։',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Նկարի բարձրությունը չափազանց մեծ է ({{ height }}px). Մաքսիմալ չափն է {{ max_height }}px։',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Նկարի բարձրությունը չափազանց փոքր է ({{ height }}px). Մինիմալ չափն է {{ min_height }}px։',
    'This value should be the user\'s current password.' => 'Այս արժեքը պետք է լինի օգտագործողի ներկա ծածկագիրը։',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Այս արժեքը պետք է ունենա ճիշտ {{ limit }} սիմվոլներ։',
    'The file was only partially uploaded.' => 'Նիշքի մասնակի բեռնման սխալ։',
    'No file was uploaded.' => 'Նիշքը չի բեռնվել։',
    'No temporary folder was configured in php.ini.' => 'php.ini նիշքում ժամանակավոր պանակ նշված չէ։',
    'Cannot write temporary file to disk.' => 'Ժամանակավոր նիշքը հնարավոր չէ գրել սկավառակի վրա։',
    'A PHP extension caused the upload to fail.' => 'PHP ֆորմատը դարձել է բեռնման չհաջողման պատճառ։',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Այս հավաքածուն պետք է պաուրակի {{ limit }} կամ ավելի տարրեր։|Այս հավելվածը պետք է պարունակի limit }} տարր կամ ավելին։|Այս հավաքածուն պետք է պարունակի {{ limit }} տարրերին կամ ավելի։',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարր կամ քիչ։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Այս հավաքածուն պետք է պաուրակի ուղիղ {{ limit }} տարր։|Այս հավաքածուն պետք է պաուրակի ուղիղ {{ limit }} տարրեր։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր։',
    'Invalid card number.' => 'Քարտի սխալ համար:',
    'Unsupported card type or invalid card number.' => 'Չսպասարկվող կամ սխալ քարտի համար:',
    'This is not a valid International Bank Account Number (IBAN).' => 'Արժեքը վավեր միջազային բանկային հաշվի համար չէ (IBAN)։',
    'This value is not a valid ISBN-10.' => 'Արժեքը ունի անվավեր ISBN-10 ձևաչափ։',
    'This value is not a valid ISBN-13.' => 'Արժեքը ունի անվավեր ISBN-13 ձևաչափ։',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Արժեքը չի համապատասխանում ISBN-10 և ISBN-13 ձևաչափերին։',
    'This value is not a valid ISSN.' => 'Արժեքը չի համապաստասխանում ISSN ձևաչափին։',
    'This value is not a valid currency.' => 'Արժեքը վավեր տարադրամ չէ։',
    'This value should be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի {{ compared_value }}։',
    'This value should be greater than {{ compared_value }}.' => 'Արժեքը պետք է մեծ լինի, քան {{ compared_value }}։',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար կամ մեծ քան {{ compared_value }}։',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի ինչպես {{ compared_value_type }} {{ compared_value }}։',
    'This value should be less than {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր քան {{ compared_value }}։',
    'This value should be less than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր կամ հավասար {{ compared_value }}։',
    'This value should not be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար {{ compared_value }}։',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի նունը {{ compared_value_type }} {{ compared_value }}:',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ մեծ է ({{ ratio }}). Մաքսիմալ հարաբերակցությունը՝ {{ max_ratio }}։',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ փոքր է ({{ ratio }}). Մինիմալ հարաբերակցությունը՝ {{ min_ratio }}։',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Պատկերը քառակուսի է({{ width }}x{{ height }}px)։ Քառակուսի նկարներ չեն թույլատրվում։',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Պատկերը ալբոմային ուղղվածության է({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Պատկերը պորտրետային ուղղվածության է ({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'An empty file is not allowed.' => 'Դատարկ նիշք չի թույլատրվում։',
    'The host could not be resolved.' => 'Հոսթի անունը հնարավոր չի պարզել:',
    'This value does not match the expected {{ charset }} charset.' => 'Արժեքը չի համընկնում {{ charset }} կոդավորման հետ:',
    'This is not a valid Business Identifier Code (BIC).' => 'Սա վավեր Business Identifier Code (BIC) չէ։',
    'This form should not contain extra fields.' => 'Այս ձևը չպետք է պարունակի լրացուցիչ տողեր.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Վերբեռնված ֆայլը չափազանց մեծ է: Խնդրվում է վերբեռնել ավելի փոքր չափսի ֆայլ.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF արժեքը անթույլատրելի է: Փորձեք նորից ուղարկել ձևը.',
  ),
));

$cataloguePl = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ta wartość powinna być fałszem.',
    'This value should be true.' => 'Ta wartość powinna być prawdą.',
    'This value should be of type {{ type }}.' => 'Ta wartość powinna być typu {{ type }}.',
    'This value should be blank.' => 'Ta wartość powinna być pusta.',
    'The value you selected is not a valid choice.' => 'Ta wartość powinna być jedną z podanych opcji.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Powinieneś wybrać co najmniej {{ limit }} opcję.|Powinieneś wybrać co najmniej {{ limit }} opcje.|Powinieneś wybrać co najmniej {{ limit }} opcji.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Powinieneś wybrać maksymalnie {{ limit }} opcję.|Powinieneś wybrać maksymalnie {{ limit }} opcje.|Powinieneś wybrać maksymalnie {{ limit }} opcji.',
    'One or more of the given values is invalid.' => 'Jedna lub więcej z podanych wartości jest nieprawidłowa.',
    'This field was not expected.' => 'Tego pola się nie spodziewano.',
    'This field is missing.' => 'Tego pola brakuje.',
    'This value is not a valid date.' => 'Ta wartość nie jest prawidłową datą.',
    'This value is not a valid datetime.' => 'Ta wartość nie jest prawidłową datą i czasem.',
    'This value is not a valid email address.' => 'Ta wartość nie jest prawidłowym adresem email.',
    'The file could not be found.' => 'Plik nie mógł zostać odnaleziony.',
    'The file is not readable.' => 'Nie można odczytać pliku.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nieprawidłowy typ mime pliku ({{ type }}). Dozwolone typy mime to {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta wartość powinna wynosić {{ limit }} lub mniej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.',
    'This value should be {{ limit }} or more.' => 'Ta wartość powinna wynosić {{ limit }} lub więcej.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.',
    'This value should not be blank.' => 'Ta wartość nie powinna być pusta.',
    'This value should not be null.' => 'Ta wartość nie powinna być nullem.',
    'This value should be null.' => 'Ta wartość powinna być nullem.',
    'This value is not valid.' => 'Ta wartość jest nieprawidłowa.',
    'This value is not a valid time.' => 'Ta wartość nie jest prawidłowym czasem.',
    'This value is not a valid URL.' => 'Ta wartość nie jest prawidłowym adresem URL.',
    'The two values should be equal.' => 'Obie wartości powinny być równe.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży. Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Plik jest za duży.',
    'The file could not be uploaded.' => 'Plik nie mógł być wgrany.',
    'This value should be a valid number.' => 'Ta wartość powinna być prawidłową liczbą.',
    'This file is not a valid image.' => 'Ten plik nie jest obrazem.',
    'This is not a valid IP address.' => 'To nie jest prawidłowy adres IP.',
    'This value is not a valid language.' => 'Ta wartość nie jest prawidłowym językiem.',
    'This value is not a valid locale.' => 'Ta wartość nie jest prawidłową lokalizacją.',
    'This value is not a valid country.' => 'Ta wartość nie jest prawidłową nazwą kraju.',
    'This value is already used.' => 'Ta wartość jest już wykorzystywana.',
    'The size of the image could not be detected.' => 'Nie można wykryć rozmiaru obrazka.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Szerokość obrazka jest zbyt duża ({{ width }}px). Maksymalna dopuszczalna szerokość to {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Szerokość obrazka jest zbyt mała ({{ width }}px). Oczekiwana minimalna szerokość to {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Wysokość obrazka jest zbyt duża ({{ height }}px). Maksymalna dopuszczalna wysokość to {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Wysokość obrazka jest zbyt mała ({{ height }}px). Oczekiwana minimalna wysokość to {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta wartość powinna być aktualnym hasłem użytkownika.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta wartość powinna mieć dokładnie {{ limit }} znak.|Ta wartość powinna mieć dokładnie {{ limit }} znaki.|Ta wartość powinna mieć dokładnie {{ limit }} znaków.',
    'The file was only partially uploaded.' => 'Plik został wgrany tylko częściowo.',
    'No file was uploaded.' => 'Żaden plik nie został wgrany.',
    'No temporary folder was configured in php.ini.' => 'Nie skonfigurowano folderu tymczasowego w php.ini, lub skonfigurowany folder nie istnieje.',
    'Cannot write temporary file to disk.' => 'Nie można zapisać pliku tymczasowego na dysku.',
    'A PHP extension caused the upload to fail.' => 'Rozszerzenie PHP spowodowało błąd podczas wgrywania.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ten zbiór powinien zawierać {{ limit }} lub więcej elementów.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ten zbiór powinien zawierać {{ limit }} lub mniej elementów.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ten zbiór powinien zawierać dokładnie {{ limit }} element.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementy.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementów.',
    'Invalid card number.' => 'Nieprawidłowy numer karty.',
    'Unsupported card type or invalid card number.' => 'Nieobsługiwany rodzaj karty lub nieprawidłowy numer karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nieprawidłowy międzynarodowy numer rachunku bankowego (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Ta wartość nie jest prawidłowym numerem ISSN.',
    'This value is not a valid currency.' => 'Ta wartość nie jest prawidłową walutą.',
    'This value should be equal to {{ compared_value }}.' => 'Ta wartość powinna być równa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta wartość powinna być większa niż {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta wartość powinna być większa bądź równa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta wartość powinna być mniejsza niż {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta wartość powinna być mniejsza bądź równa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta wartość nie powinna być równa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość nie powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Proporcje obrazu są zbyt duże ({{ ratio }}). Maksymalne proporcje to {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Proporcje obrazu są zbyt małe ({{ ratio }}). Minimalne proporcje to {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Obraz jest kwadratem ({{ width }}x{{ height }}px). Kwadratowe obrazy nie są akceptowane.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obraz jest panoramiczny ({{ width }}x{{ height }}px). Panoramiczne zdjęcia nie są akceptowane.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obraz jest portretowy ({{ width }}x{{ height }}px). Portretowe zdjęcia nie są akceptowane.',
    'An empty file is not allowed.' => 'Plik nie może być pusty.',
    'The host could not be resolved.' => 'Nazwa hosta nie została rozpoznana.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta wartość nie pasuje do oczekiwanego zestawu znaków {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ta wartość nie jest poprawnym kodem BIC (Business Identifier Code).',
    'Error' => 'Błąd',
    'This is not a valid UUID.' => 'To nie jest poprawne UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ta wartość powinna być wielokrotnością {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ten kod BIC (Business Identifier Code) nie jest powiązany z międzynarodowym numerem rachunku bankowego (IBAN) {{ iban }}.',
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
  ),
  'messages' => 
  array (
    'WrongStatusExceptionText' => 'Powinieneś używać wartości zawartych tylko i wyłącznie w App/Model/Response/Status!',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePl);
$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'WrongStatusExceptionText' => 'You should use only values from App/Model/Response/Status!',
  ),
));
$cataloguePl->addFallbackCatalogue($catalogueEn);

return $catalogue;
