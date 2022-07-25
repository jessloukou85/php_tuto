
<?php

/*$etudiants = [
              ['nom' =>'loukou',
              'prenom'=>'jess',
              'ville'=>'abidjan',
              'fonction'=>'commercial',
              'note'=>[12,14,10,10,14,13,15,11],
              'age'=>35],

              ['nom' =>'agah',
              'prenom'=>'farnck',
              'ville'=>'abidjan',
              'fonction'=>'informaticien',
              'note'=>[12,14,16,18,17,13,15,19],
              'age'=>'trente ans'],

              ['nom' =>'banhiet',
              'prenom'=>'aristide',
              'ville'=>'abidjan',
              'fonction'=>'biologiste',
              'note'=>[12,11,3,11,17,13,15,12],
              'age'=>'vingt ans'],
];

$etudiants[2]['note'][8]=22;
$etudiants[2]['fonction']=['biologiste','pharmacie','medecin'];
//echo $etudiants['nom'].' '.$etudiants['ville'].' '.print_r($etudiants['note'])."\n";
echo print_r($etudiants[2]);
echo $etudiants[2]['note'][8],['fonction'][1];*/
    /*$tableau = ['nom'=>['loukou','agah','koffi'],
                'prenom'=>['jess','franck','hilaire'],
                'age'=>[35,30,34]];
    $tableau['age'][3]=40;

    $table   =[
                ['nom' =>'loukou',
                 'prenom' =>'jess',
                 'fonction' => 'commerciale',
                 'ville'=>'abidjan',
                 'age'=> 35],
                ['nom' =>'agah',
                 'prenom' =>'franck',
                 'fonction' => 'informaticien',
                 'ville'=>'abidjan',
                 'age'=> 30],
                ['nom' =>'banhiet',
                 'prenom' =>'aristide',
                 'fonction' => 'biologiste',
                 'ville'=>'abidjan',
                 'age'=> 35],
    ];
    
    $table[2]['fonction']=['biologiste','medecin','genecologue','pharmarcien','ophatmologue','dentiste'];
    $table[1]['fonction']=['informaticien','developpeur fulstack'];
    $table[0]['matricule']='An100';
    $table[1]['matricule']='An101';
    $table[2]['matricule']='An102';
    $table[1]['prenom']='franck janel';
    
   echo ($tableau['nom'][1]);
   echo $table[0]['fonction']."\n".print_r($table[1]['fonction'])."\n".print_r($table[2]['fonction']);
   print_r($table[1]);
   print_r($tableau['nom'][1]);*/
// ------- condition if else and elseif -------------------//

/*$heure = (int)readline("veuillez entrer l'heure acuelle? ") ;
 if (0<=$heure and $heure<=24){
     if($heure>=0 and $heure<6){
        echo "nous somme dans la nuit d'un nouveau jour";
        }elseif($heure>=6 and $heure <10){
         echo " c'est la matinée !! ";
        }elseif ($heure>=10 and $heure <12){
            echo "nous avons passe la matinée!";
        }elseif($heure == 12){
            echo "il est midi!!!";
        }elseif ($heure>12 and $heure <=18 ){
            echo "c'est l'apreès midi";
        }elseif ($heure>18 and $heure<= 20){
            echo " c'est la soirée;;;;";
        }elseif($heure>20 and $heure<=24){
            echo "il fait nuit";
        }
    }else{
        echo "veuillez ressaisir l'heure";
    }*/
 //-------------- condition avec switch case break -------------------------//   
    
/*$heure = (int)readline("veuillez entrer une heure....   ");
switch ($heure){
    case($heure>=0 and $heure<6);
        echo"nous somme dans la nuit d'un nouveau jour";
        break;
    case ($heure>=6 and $heure <10);
        echo " c'est la matinée !! ";
        break; 
    case ($heure>=10 and $heure <12);
        echo " nous avons passé la matinée !! ";
        break; 
    case($heure == 12);
        echo "il est midi!!!";
        break;
    case($heure>12 and $heure <=18 );
        echo "c'est l'apreès midi";
        break; 
    case ($heure>18 and $heure<= 20);
        echo " c'est la soirée;;;;"; 
        break; 
    case ($heure>20 and $heure<=24);
        echo "il fait nuit"; 
        break; 
    default:
    echo "veuillez ressaisir l'heure";
}*/
//------------------- les boucles while for et foreach --------------------------------//
/*$x = 0;
while ($x <4) {
   echo"la valeur actuelle est : $x\n";
   $x++; 
}
$lettre ="";
while($lettre !=='A'){
    $lettre = readline('entrer une lettre  ');
}
 echo "bravo vous avez trouver la lettre\n\n";

$mot = "";
while($mot!=='avion'){
    $mot = readline('veuillez taper encore un mot  ');
}
echo "felicitation à la prochaine sceance\n\n";*/


/*$motdepass = "";
while($motdepass !== 'lyrhann'){
    $motdepass = readline("veuillez rentrer le bon mot de pass  ");
}
echo"felicitations vous avez rentrez le bon mot de pass   ";*/
/*$valeur = '';
while($valeur !== 1200){
    $valeur =(int)readline('veuillez taper la valeur exacte  ');
}  
        echo"gennnniaalll vous avez tapé la bonne valeur";*/

/*$incr=10;
while($incr>0){
    echo"la valeur actuelle est : $incr\n";
        $incr--;
}*/
/*$week = ['lun','mar','mer','jeu','ven','sam','dim'];
$employe =['nom','prenom','ville','fonction','email'];
$table   =[
    ['nom' =>'loukou',
    'prenom' =>'jess',
    'fonction' => 'commerciale',
    'ville'=>'abidjan',
    'age'=> 35],
    ['nom' =>'agah',
    'prenom' =>'franck',
    'fonction' => 'informaticien',
    'ville'=>'abidjan',
    'age'=> 30],
    ['nom' =>'banhiet',
    'prenom' =>'aristide',
    'fonction' => 'biologiste',
    'ville'=>'abidjan',
     'age'=> 35],
];
$table[3]=['nom'=>'ouatt','prenom'=>'ahmed','fonction'=>'gerant','ville'=>'bke','age'=>32];*/

/*for($i=0;$i<5;$i++){
    print_r("$employe[$i]\n");
}*/
/*foreach ($table as $attribut => $table){
    echo"$attribut\n";
    foreach($table as $table){
        echo"$table\n";
    }
}*/
/*$notes =[];
$action = '';
while($action !=='fin'){
    $action = readline('veuillez entrer un nvelle note ou taper (fin) pour arreter  ');
    if($action !=='fin'){
        $notes[] = (int)$action;
    }
}
foreach($notes as $notes){
    echo"-: $notes\n";
}*/

/*while(true){
    $hrd=(int)readline("entrer une heure d'ouverture  ");
    $hrf=(int)readline("entrer une heure de fermeture  ");
    if($hrd>=$hrf){
        echo"cette plage de permance ne peut exister car heure d'ouverture $hrd est superieur à l'heure de fermeture $hrf";           
    }else{
        $plage[]=[$hrd,$hrf];
        $action = readline("veuillez entrer une nouvlle plage de permanace O/N ");
        if($action == 'N'){
            break;
        }
    }
}*/
/*foreach($plage as $plage){
    echo "le magasin est ouvert de : $plage[0] heure à $plage[1] heure";
}*/
/*$heure = readline('veuille entrer une heure de visite  ');
$interval=false;
foreach($plages as $plages){
    if($heure>=$plages[0] && $heure<=$plages[1]){
        $interval=true;
        break;
    }
}
:  if($interval){
    echo"vous pouvez visiter le magasin";
}else{
    echo "desolé vous ne pouvez pas visiter";
}
*/
//------------------------ les functions ---------------------------------------//     
/*function slt($nom=''){
    if($nom==''){
        echo "bonjour M. ";
    }else{
        echo "bonjour M. ".$nom."\n" ;
    }
   return;
}
$hello =slt('jess');
echo $hello;*/
//-------------------------------------------------------------------------------//
/*function response_oui_non($phrs=''){
    while(true){
        $phrs =readline('voulez vous continuer o(ui) ou n(on)  ');
        if($phrs=='o'){
            echo 'true';
            return;
    
        }elseif($phrs=='n'){
             echo 'false';
            return;
        }
    }
}
$result = response_oui_non();
echo $result;*/
//---------------------------calcul de l'aire d'un cercle----------------------------//
/*function aire_cercle($R=""){
    $R="";
    $S="";
    $pi=3.14;
    $R=(int)readline('veuillez entrer le rayon du cercle  ');
    echo "$R\n";
    $S = $R*$R*$pi;
    echo "la surface du cercle de rayon $R est: $S";
}
$a = aire_cercle();
echo $a;*/
//---------------------------function oui_non--------------------------------------//
/*function response_oui_non(){
    while(true){
        $phrase =readline('veuillez entrer Y(es) pour continuer ou N(o) pour arreter');
        if($phrase=='Y'){
            echo "continuer";
            break;
        }elseif($phrase=='N'){
            echo "arreter";
            break;
        }
        }
    }
    $result = response_oui_non();
    echo $result;*/
//------------------------------function indexiation-------------------------------//
/*function index($nom=''){
    $nom =['jean-philippe','evelyne','jess','lyrhann','mya','typhenn'];
    for($i=0; $i<6;$i++){
        echo "le prenom ".$i+1 ." du tableau est : ".$nom[$i]."\n";
}
}
$result = index();
echo "$result";*/
//--------------------------------fonction validation-------------------------------//
/*function validation($name=''){
    $nom =['jean-philippe','evelyne','jess','lyrhann','mya','typhenn'];
    while(true){
        $name=readline('veuillez entrer un nom ');
        if($name=='jess'){
            echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
            break;
        }elseif($name=='mya'){
            echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
            return;
        }elseif($name=='jean-philippe'){
            echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
            break;
        }elseif($name=='typhenn'){
            echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
            return;
        }elseif($name=='evelyne'){
            echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
            return;
        }elseif($name=='lyrhann'){
            echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
            break;
        }else{
            echo "ce prenom ".$name." n'est pas dans mon tableau\n";
        }
    }
}         
$result1 = validation();
echo $result1;*/
/*function validation1($name=''){
    $nom =['jean-philippe','evelyne','jess','lyrhann','mya','typhenn'];
    while(true){
        $name=readline('veuillez entrer un nom ');
        switch($name){
            case  ($name=='jess');
                echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
                break;
            case  ($name=='mya');
                echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
                return;
            case  ($name=='jean-philippe');
                echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
                break;
            case  ($name=='typhenn');
                echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
                return;
            case ($name=='evelyne');
                echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
                return;
            case ($name=='lyrhann');
                echo "ce prenom ".$name." est bien dans mon tableau de prenom\n";
                break;
            default:
                 echo "ce prenom ".$name." n'est pas dans mon tableau\n";
        }
    }   
}      
$result2 = validation1('lionel');
echo $result2('aline');*/
//--------------------------multiplictation d'un nombre entier x choisir---------------------//
/*function multiplication($number=''){
    $number=(int)readline('merci de taper un nombre ');
    echo "la multilplication de ce nombre ".$number." donne:\n";
    for($i=1; $i<11; $i++){
        $result="$number "."*"." $i "."= ".$number*$i."\n";
        echo $result;
    }
}
$mult = multiplication();
echo $mult;*/
//------------------------function du carré d'un nombre----------------------------//
/*function carre_nombre($number=''){
    $number=(int)readline('entrez un nombre entier ');
    while($number<=8){
        $carre= "le car de ce nombre ".$number." est ".$number*$number."\n";
        $number++;
        echo $carre;
    }
}
$puissance_2 = carre_nombre();
echo $puissance_2;*/
//--------------------------algorithme afficher les valeurs de 10 à 25---------------------------//
/*$x = 10;
while($x<=25){
    echo "la valeur de x est :".$x."\n";
    $x++;
}*/
//--------------------------------
/*function demander_creneau($phrase='veuillez rentrer un creneau '){
    echo $phrase."\n";
    while(true){
        $hrd = (int)readline("entrez l'heure de debut ");
            if($hrd>=0 && $hrd<=23){
                break;
            }
         }
    while(true){
        $hrf = (int)readline("entrez l'heure de fin ");
            if($hrf>=0 && $hrf<=23 && $hrf>$hrd){
                break;
            }
        }
        return [$hrd,$hrf] ;
    }

$creneau=demander_creneau();
$creneau2= demander_creneau('veuillez entrer votre creaneau ? ');
var_dump($creneau,$creneau2);*/
/*function demader_nom_age($mon='',$age=''){
        $nom = (string)readline('quel est votre nom svp ');
        $age = (int)readline('quel est votre age svp ');
    }*/
   /* $nom='';
    while(true){
        $nom =(string)readline('veuillez entrer votre nom ');   
        $age = (int)readline('quel est votre age svp ');
        echo "votre nom est ".$nom." vous avez ".$age." ans\n";
        return;
    }*/
/*    $age = 25;
    $res = ++$age;
    echo "resulte ".$res."\n";
    echo "age ".$age . "\n";
    while($age<30){
        echo "l'age actuelle est : ".$age."\n";
        $age++;
    }*/
/*    $i = 0;
while($i<=6){
    $i++;
    if($i==5)
    continue;
    echo "la valeur de i vaux ".$i. "\n";
}*/
/*$phrase='';
$nom='';
$age ="";
while($phrase<3){
    $phrase= readline("quel est votre nom et quel est votre age");
    while(strlen($nom)<=10){
        $nom = readline("entrez votre nom : ");
    }
    echo "votre nom est bien : ". $nom. "\n";
    while($age<18){
        $age = (int)readline("quel est votre age : ");
    }
    echo "votre age est bien ".$age. "\n";
}
$phrase = ("votre nom est bien ".$nom." vous avez ".$age." ans\n");
echo $phrase;*/

/*$week = ['lun','mar','mer','jeu','ven','sam','dim','jan','fev','mar','avr'];
for ($i=0; $i<10; $i++){
    echo "la valeur de l'indice ".$i." est :".$week[$i]."\n";
}*/
 /*$x = '';
 while ($x !== 10){
    $x = (int)readline('veuillez rentrer un nombre ');
 }
 echo $x;*/
/*    $nom = readline('quel est votre nom en toutes lettres? :');
    echo $nom."\n";
    $age =(int)readline('quel est votre age? :');
    echo $age."\n";
    
    echo "bonjour ".$nom." tu as ".$age." ans et bienvenue à l'université";*/
//::::::::::::::::::::::::::::::::::EXERCICE 11::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$Longueur = ''; $largeur= ''; $perimetre = ''; $surface ='';
$Longueur =(int)readline('veuillez entrer la longueur du rectangle :');
 echo "la valeur de la longueur est : ".$Longueur." cm\n";

$largeur  =(int)readline('veullez entrer la lageur du rectangle :');
echo "la valeur de la largeur est : ".$largeur." cm \n";

if($Longueur <= $largeur){
    echo "la longueur ne doit pas etre inferieur à la largeur";
    return;
}else{
    $perimetre =(int)($Longueur + $largeur) * 2;
    echo "le perimetre dun rectangle est : ".$perimetre." cm \n";
    
    $surface = $Longueur * $largeur ;
    echo "la surface dun rectangle est : ".$surface." cm²\n";
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 12::::::::::::::::::::::::::::::::::::::::::::::::::::

/*$Longueur =(int)readline('veuillez entrer la longueur du rectangle :');
echo "la valeur de la longueur est : ".$Longueur." cm\n";

$largeur  =(int)readline('veullez entrer la lageur du rectangle :');
echo "la valeur de la largeur est : ".$largeur." cm \n";

 while($Longueur <= $largeur){
    $largeur  =(int)readline('veullez entrer une nouvelle lageur du rectangle :');
    echo "la valeur de la largeur est : ".$largeur." cm \n";  
}
    $perimetre =(int)($Longueur + $largeur) * 2;
    echo "le perimetre dun rectangle est : ".$perimetre." cm \n";
    
    $surface = $Longueur * $largeur ;
    echo "la surface dun rectangle est : ".$surface." cm²\n";*/
    
//::::::::::::::::::::::::::::::::::EXERCICE 13::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$X = (int)readline('veuillez saisir un nombre au clavier : ');
echo " le premier nombre saisir est : ".$X." \n";
$Y = (int)readline('veuillez saisir un second nombre : ');
echo " le second nombre saisir est : ".$Y." \n";
    $puissance = $X ^ $Y ;
echo "le nombre ".$X." puissance ".$Y." est : ".$puissance;*/

//::::::::::::::::::::::::::::::::::EXERCICE 14::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$note=['note1','note2','note3','note4','note5'];
for ($i = 1 ; $i<=5; $i++){
    $note[$i]=(int)readline('veuillez entrer la note numero '. $i.' : ');
    echo "la note numero ".$i." est : ".$note[$i]." \n";
}
print_r($note);*/
//::::::::::::::::::::::::::::::::::EXERCICE 15::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$x = (int)readline('veuillez entrer un premier nombre : ');
print  "le premier nombre est : ". $x . " \n" ;
$y = (int)readline('veuillez entrer un second nombre : ');
print "le second nombre est : ".$y . " \n\n";
print $x * $y ."\n";
if(($x * $y)<0)
    print "les deux nombres entrés sont de signe different \n";
    else
    print "les deux nombres sont du meme signe\n";*/
//::::::::::::::::::::::::::::::::::EXERCICE 16::::::::::::::::::::::::::::::::::::::::::::::::::::
    /*$x = (int)readline('veuillez entrer un premier nombre x : ');
print  "le premier nombre x est : ". $x . " \n" ;
$y = (int)readline('veuillez entrer un second nombre y : ');
print "le second nombre y est : ".$y . " \n";
print $x * $y ."\n";
if(($x * $y)<0){
    print "les deux nombres x et y entrés sont de signe different \n";
    $a = $x + $y ;
    $b = $x * $y ;
    $x = $a ; 
    $y = $b ; 
    print "la valeur de x reçoit la somme des deux nombres x et y est x = ".$x."\n";
    print "la valeur de y reçoit le produit des deux nombres x et y est y = ".$y."\n";
    return;
}else{
    print "les deux nombres x et y sont du meme signe\n";
    $x = $x + $y ;
    $y = $x - $y ;
    $x = $x - $y ;
    echo "la nouvelle valeur de x est : ". $x ."\n";
    echo "la nouvelle valeur de y est : ". $y ."\n";
    return;
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 17::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$nbre = (int)readline('veuillez entrer le nombre de copies effectuées : ');
print "le nombre est de : ".$nbre." copies\n";
 if ($nbre <= 10)
    $facture = ($nbre*30);
    elseif($nbre>10 && $nbre<= 30)
        $facture =((10 * 30)+(($nbre-10)* 25 ));
        elseif ($nbre > 30)
            $facture =((10 * 30)+(20 * 25)+(($nbre - 30)*20));
            echo "la facture qui ressort de ".$nbre." copies est de ".$facture." francs\n";*/
//::::::::::::::::::::::::::::::::::EXERCICE 18::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$age='';
 while($age <=0){
     $age =(int)readline('bonjour mon enfant, quel est ton age ? ');
    }
    switch($age){
        case ($age>0 && $age <3);
            print "tu as ".$age." ans tu es de la categorie des NOURRISSONS ";
            break;
            case ($age>=3 && $age <6);
                print "tu as ".$age." ans tu es de la categorie des ENFANTS ";
                break;
                case ($age>=6 && $age <8);
                    print "tu as ".$age." ans tu es de la categorie des POUSSINS ";
                    break;
                    case ($age>=8 && $age <10);
                        print "tu as ".$age." ans tu es de la categorie des PUPILLES ";
                        break;
                        case ($age>=10 && $age <12);
                            print "tu as ".$age." ans tu es de la categorie des MINIMES ";
                            break;
                            case ($age>=12 && $age <14);
                                print "tu as ".$age." ans tu es de la categorie des CADETS ";
                                break;
                                case ($age>=14 && $age <18);
                                    print "tu as ".$age." ans tu es de la categorie des JUNIORS ";
                                    break;
                                    case ($age>=18 && $age <24);
                                        print "tu as ".$age." ans tu es de la categorie des MAJEURS ";
                                        break;
                                        case ($age>=24 && $age <35);
                                            print "tu as ".$age." ans tu es de la categorie des SENIORS ";
                                            break;
                                            default:
                                            print "vous etes des VEILLARDS";
                                        }*/
//::::::::::::::::::::::::::::::::::EXERCICE 19::::::::::::::::::::::::::::::::::::::::::::::::::::
/*for($i = 1; $i<3; $i++){
    $name ='';
    $note1 = '';
    $note2 = '';
    $note3 = '';
    while($name==''){
        $name = readline('bonjour monsieur veuillez rentrer votre nom : ');
    }
    while($note1 < 0 || $note1 >20){
        $note1=(int)readline("veuillez saisir votre note1 : ");   
    }
    while($note2 < 0 || $note2 >20){
        $note2=(int)readline("veuillez saisir votre note2 : ");   
    }
    while($note3 < 0 || $note3 >20){
        $note3=(int)readline("veuillez saisir votre note3 : ");   
    }
    $note=[$note1,$note2,$note3];
    
    $moyenne = (($note1 + $note2 + $note3)/3);
    
    switch($moyenne){
        case($moyenne<= 20 && $moyenne>=16);
        $mention = 'TRES BIEN';
        break;
        case($moyenne<16 && $moyenne>=14);
        $mention = 'BIEN';
        break;
        case($moyenne<14 && $moyenne>=12);
        $mention = 'ASSEZ BIEN';
        break;
        case($moyenne<12 && $moyenne>=10);
        $mention = 'PASSABLE';
        break;
        case($moyenne<10);
        $mention = 'INSUFFISANT';
        break;
    }
    
    print "l'etudiant ".$name." a obtenue une pour ces trois notes entrées ".$note1.", ".$note2." et ".$note3." une moyenne de : ".$moyenne." de moyenne avec pour mention ".$mention." .\n" ;  
}*/
/*::::::::::::::::::::::: A TERMINER EXERCICE 20:::::::::::::::::::::::::::::::::::::::::::::::::::
$nbre1 = 0 ;
$nbre2 = '';
while($nbre1==0){
    $nbre1 = (int)readline('veuillez entrer un premier nombre entier svp : ');
    print 'le premier nombre que vous aviez saisir est : '.$nbre1." \n";
}
while($nbre2==''){
    $nbre2 = (int)readline('veuillez entrer un second nombre entier svp : ');
    print 'le premier nombre que vous aviez saisir est : '.$nbre2." \n";
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 21::::::::::::::::::::::::::::::::::::::::::::::::::::
/*for($ii = 0; $ii<5 ; $ii++){
    $N = (int)readline('veuillez entrer un nombre : ');
    for($i=($N+1); $i< ($N+11) ; $i++){
        print $i . "\n";
    }
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 22::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$N = (int)readline('veuillez entrer un nombre : ');
$i=$N+1;
while($i<($N+10)){
    print $i . "\n";
    $i++;
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 23::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$a="";
$b="";
$c="";

$a = (int)readline('veuillez entrer le coefficient a de x² : ');
$b = (int)readline('veuillez entrer le coefficient b de x : ');
$c = (int)readline('veuillez entrer le coefficient c de : ');
$D = (($b*$b)-(4*$a*$c));
if($a==0 && $b==0 &&$c==0){
    print ("il n'y a pas d'equation qui existe");
}elseif($a==0 && $b==0 && $c!=0){
    print ("il n'y a pas d'equation qui existe");
}elseif($a==0 && $b!=0 && $c ==0){
    print ("il n'y a une equation de type ".$b."x qui a pour solution X = 0 ");
}elseif($a==0 && $b!=0 && $c!=0){
    print ("il n'y a une equation de type ".$b."x + ".$c." qui a pour solution X = ".-($c/$b));
}elseif($a!=0 && $b==0 && $c==0){
    print ("il n'y a une equation de type ".$a."x² qui a pour solution X = 0 ");
}elseif($a!=0 && $b==0 && $c!=0){
    print ("il n'y a une equation de type ".$a."x² + ".$c." qui a pour solution X = 0 ");
}elseif($a!=0 && $b!=0 && $c==0){
    print ("il n'y a une equation de type ".$a."x² + ".$b."x qui a deux solutions X1 = ".-(($b-sqrt($D))/(2*$a))." et X2 = ".-(($b+sqrt($D))/(2*$a)));
}elseif($a!=0 && $b!=0 && $c!=0){
    $D = (($b*$b)-(4*$a*$c));
    print ("il n'y a une equation de type ".$a."x² + ".$b."x + ".$c."\n");
    if($D<0){
        print ("il n'y a pas de solution");
    }elseif($D==0){
        print ("il n'y a une equation de type ".$b."x + ".$c." qui a pour solution X = ".-($c/$b));
    }elseif($D>0){
        print ("il y a deux solutions \nX1 = ".-(($b-sqrt($D))/(2*$a))."\nX2 = ".-(($b+sqrt($D))/(2*$a)));
    } 
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 24::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$Somme = 0;
$n = (int) readline('veuillez entrer un nombre : ');
for($i=1;$i<$n+1;$i++){
    $Somme = $Somme + (1/$i)."\n";
    print $Somme;
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 25::::::::::::::::::::::::::::::::::::::::::::::::::::
/*$S=0;
define ('UNIQUE',10);
$n= readline('veuillez entrer un nombre entier qui constitue la partie puissance : ');
for($i=0; $i<$n+1; $i++){
    $S = $S + pow(UNIQUE,$i)."\n";
    print $S;
}
echo 'la valeur de ma constante UNIQUE est : '.UNIQUE;*/
//::::::::::::::::::::::::::::::::::EXERCICE 26::::::::::::::::::::::::::::::::::::::::::::::::::::
/*for($ii = 0 ; $ii<3 ;$ii++){

    $nb = '';
    $fact =1;
    while($nb==false){
        $nb =(int)readline('veuillez entrer un nombre positif non null : ');
        if($nb<0){
            $nb =(int)readline('veuillez entrer un nombre positif non null : ');
        }
        for($i = 1; $i<=$nb; $i++){
            $fact = $fact*$i."\n" ;
            print $fact;
        }
    }
}*/
//::::::::::::::::::::::::::::::::::EXERCICE 27::::::::::::::::::::::::::::::::::::::::::::::::::::
$arr=[1,2,3,4,5];
print_r($arr);

foreach ($arr as $key => $value) {
    unset($arr[$key]);
}
print_r($arr);

$arr[] = 6;
print_r($arr);

$arr = array_values($arr);
$arr[]=7;
$arr[]=8;
$arr[]=9;
print_r($arr);

foreach ($arr as $key => $value) {
    unset($arr[0]);
}
print_r($arr);
$arr[21] = 10;
$arr[] = 1010;
print_r($arr);

$arr = array_values($arr);
print_r($arr);