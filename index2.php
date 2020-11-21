<?php

$displayarray=array(
	                'Charbagh'=>0,
	                'IndiraNagar'=>10,
	                'BBD'=>30,
	                'Barabanki'=>60,
	                'Faizabad'=>100,
	                 'Basti'=>150,
	                 'Gorakhpur'=>210


);

 $pickup=$_POST['pickup'];
 $drop=  $_POST['drop'];
 $type= $_POST['type'];
 $luggage = $_POST['luggage'];

 $total=abs($displayarray[$pickup]-$displayarray[$drop]);
  $fare=0;
 if($type=='CedMicro'){
 	$fixedfare=50;
 	$fare=0;
 	if($total>0&& $total<=10)
 	{
          $fare=$fixedfare+$total*13.50;

}
  elseif($total>10&& $total<=60)
  {
         $fare=$fixedfare+10*13.50+($total-10)*12.00;

 }
 elseif ($total>60&& $total<=160)
 {
          
         $fare=$fixedfare+10*13.50+50*12.00+($total-60)*10.20;

 }
 elseif ($total>160)
 {
         $fare=$fixedfare+10*13.50+50+50*12.00+100*10.20+($total-160)*8.50;

 }


 }

   elseif ($type=='CedMini'){
 	     $fixedfare=150;
 	     $fare=0;
   if($total>0&& $total<=10)
 	{
          $fare=$fixedfare+$total*14.50;

}

 elseif($total>10&& $total<=60)
  {
         $fare=$fixedfare+10*14.50+($total-10)*13.00;

 }

  elseif ($total>60&& $total<=160)
 {
          
         $fare=$fixedfare+10*14.50+50*13.00+($total-60)*11.20;

}
  
  elseif ($total>160)
 {
         $fare=$fixedfare+10*13.50+50+50*12.00+100*11.20+($total-160)*9.50;

 }

}


 elseif ($type=='CedRoyal'){
 	     $fixedfare=200;
 	     $fare=0;
   if($total>0&& $total<=10)
 	{
          $fare=$fixedfare+$total*15.50;

}

 elseif($total>10&& $total<=60)
  {
         $fare=$fixedfare+10*15.50+($total-10)*14.00;

 }

  elseif ($total>60&& $total<=160)
 {
          
         $fare=$fixedfare+10*15.50+50*14.00+($total-60)*12.20;

}

 elseif ($total>160)
 {
         $fare=$fixedfare+10*15.50+50+50+50*14.00+100*12.20+($total-160)*10.50;

 }

}

      elseif ($type=='CedSUV'){
 	     $fixedfare=250;
 	     $fare=0;
   if($total>0&& $total<=10)
 	{
          $fare=$fixedfare+$total*16.50;

}
 elseif($total>10&& $total<=60)
  {
         $fare=$fixedfare+10*16.50+($total-10)*15.00;

 }
  elseif ($total>60&& $total<=160)
 {
          
         $fare=$fixedfare+10*16.50+50*15.00+($total-60)*13.20;

}


 elseif ($total>160)
 {
         $fare=$fixedfare+10*16.50+50+50+50*15.00+100*13.20+($total-160)*11.50;

 }

}



    if ($type=='CedMini')

  {
       
     if($luggage>0&& $luggage<=10)
 	{
        $fare=$fare+50.00;

}
  elseif($luggage>10&& $luggage<=20)
  {
       $fare=$fare+100.00;

 }

 elseif ($luggage>20)
 {
         $fare=$fare+200.00;

 }

}


 if ($type=='CedRoyal')

  {
       
     if($luggage>0&& $luggage<=10)
 	{
        $fare=$fare+50.00;

}
  elseif($luggage>10&& $luggage<=20)
  {
         $fare=$fare+100.00;

 }

  elseif ($luggage>20)
 {
         $fare=$fare+200.00;

 }

}



if ($type=='CedSUV')

  {
       
     if($luggage>0&& $luggage<=10)
 	{
        $fare=$fare+100.00;

}
  elseif($luggage>10&& $luggage<=20)
  {
         $fare=$fare+200.00;

 }

  elseif ($luggage>20)
 {
         $fare=$fare+400.00;

 }

}

echo $fare;

?>