<?php
require('conn.php');
$sub_num = $_POST["sub_num"];
$sub_bunban = $_POST["sub_bunban"];

$sql="select * from ���� 
where �������ȣ = :sub_num and �й� = $sub_bunban";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_num", $sub_num);
$re=oci_execute($result);
$A = 0;
$A0 = 0;
$B = 0;
$B0 = 0;
$C = 0;
$C0 = 0;
$D = 0;
$D0 = 0;
$F = 0;
while(($row = oci_fetch_array($result, OCI_NUM))){
	if(strcmp($row[5],'A+') == 0)
		$A++;
	else if(strcmp($row[5],'A0') == 0)
		$A0++;
	else if(strcmp($row[5],'B+') == 0)
		$B++;
	else if(strcmp($row[5],'B0') == 0)
		$B0++;
	else if(strcmp($row[5],'C+') == 0)
		$C++;
	else if(strcmp($row[5],'C0') == 0)
		$C0++;
	else if(strcmp($row[5],'D+') == 0)
		$D++;
	else if(strcmp($row[5],'D0') == 0)
		$D0++;
	else
		$F++;
}
function bar_graph($val,$x,$y,$x_val,$img_url,$legend,$theme)   { //-- ���� �׷��� ������ִ� �Լ�
     /*
     $val : ���� ���ҷ� �ϴ� �迭
     $x : �׷��� ������ ũ��
     $y : �׷��� ������ ũ��
     $x_val : x�� ���� �̸� �迭
     $img_url : ������ ������ ��ο� �̸�(png)
     */
    
     $gaesu = count($val);   //-- �׷��� ���� ����
     $makde_pok = ($x / $gaesu) / 3;   //-- ���� �ϳ� ��
     $real_y = $y - 40;    //-- �׷����� �׷��� ���� ��ġ
    
     $max_value = $val[0];
     for ($i=0;$i<$gaesu;$i++)     {
         if($val[$i] > $max_value)   $max_value = $val[$i];
         }

     $im =  @ImageCreate($x,$y) or die ("�̹����� �ʱ�ȭ ���� ���߽��ϴ�");
	  
	  switch($theme) {
	  	case "red" :
	  		$backgroundcolor=ImageColorAllocate($im,208,208,208);  //-- �׷��� ������
     		$rectanglecolor = ImageColorAllocate($im,198,34,34); //-- �׷��� ����
     		$white=ImageColorAllocate($im,255,255,240);            //-- �׷��� �ٴڻ�
     		$color_x = imagecolorallocate($im, 0, 0, 0); //x ��, (black)
	  		$color_y = imagecolorallocate($im, 255, 233, 53); // y �� (white) 
	  		$legend_color = imagecolorallocate($im, 255, 0, 0); // �׷��� ���� 
	  		break;
	  	case "green" :
	  		$backgroundcolor=ImageColorAllocate($im,208,208,208);  
     		$rectanglecolor = ImageColorAllocate($im,46,87,30); 
     		$white=ImageColorAllocate($im,255,255,240);            
     		$color_x = imagecolorallocate($im, 0, 0, 0); 
	  		$color_y = imagecolorallocate($im, 255, 233, 53); 
	  		$legend_color = imagecolorallocate($im, 255, 0, 0);
	  		break;   	
	  	case "blue" :
	  		$backgroundcolor=ImageColorAllocate($im,208,208,208);  
     		$rectanglecolor = ImageColorAllocate($im,65,127,250); 
     		$white=ImageColorAllocate($im,255,255,240);            
     		$color_x = imagecolorallocate($im, 0, 0, 0); 
	  		$color_y = imagecolorallocate($im, 255, 233, 53);  
	  		$legend_color = imagecolorallocate($im, 255, 0, 0);
	  		break;  	  	
	  	default :
	  		$backgroundcolor=ImageColorAllocate($im,208,208,208);
     		$rectanglecolor = ImageColorAllocate($im,65,127,250); 
     		$white=ImageColorAllocate($im,255,255,240);            
     		$color_x = imagecolorallocate($im, 0, 0, 0); 
	  		$color_y = imagecolorallocate($im, 255, 233, 53); 
	  		$legend_color = imagecolorallocate($im, 255, 0, 0);
	  		break;   	
	  }

     ImageFilledRectAngle($im,0,$real_y,$x,$y,$white);    
     for ($i=0;$i<$gaesu;$i++)   {
           ($i == 0) ? $makde_x[$i] = $makde_pok: $makde_x[$i] = ($makde_x[$i - 1] + $makde_pok * 3);
           $makde_y[$i] = $real_y - ($val[$i]/$max_value) * $real_y; //-- ������ ���� y ��ǥ

           ImageFilledRectAngle($im,$makde_x[$i],$makde_y[$i],$makde_x[$i]+$makde_pok,$real_y,$rectanglecolor);          
           ($makde_y[$i] < 0) ? $y_string = 0 : $y_string = $makde_y[$i]+10;
			  ImageTTFtext($im,8,0,$makde_x[$i],$y_string,$color_y, "nanum.ttf", $val[$i]); //Y�� ��
           ImageTTFtext($im,8,90,$makde_x[$i]-2,$y-40,$color_x, "nanum.ttf", iconv("EUC-KR","UTF-8",$x_val[$i])); //X�� �� ImageTTFtext (�̹��� ������, ũ��, ����, X��ǥ, Y��ǥ, �� ������, TTF����, ���ڿ�);       
     }
     ImageTTFtext($im,8,0,10,$y-10,$legend_color, "nanum.ttf", iconv("EUC-KR","UTF-8",$legend)); //Ÿ��Ʋ (�̹��� ������, ũ��, ����, X��ǥ, Y��ǥ, �� ������, TTF����, ���ڿ�);

     ImagePNG($im,$img_url);
     ImageDestroy($im);
     
     echo "<img src=\"$img_url\" border=\"0\" />";
    
}

$data = array();
$x_index = array();

$data[0] = $A;
$data[1] = $A0;
$data[2] = $B;
$data[3] = $B0;
$data[4] = $C;
$data[5] = $C0;
$data[6] = $D;
$data[7] = $D0;
$data[8] = $F;

$x_index[0] = "A+";
$x_index[1] = "A0";
$x_index[2] = "B+";
$x_index[3] = "B0";
$x_index[4] = "C+";
$x_index[5] = "C0";
$x_index[6] = "D+";
$x_index[7] = "D0";
$x_index[8] = "F";

$width = 400;
$height = 300;
$img = "graph.png";
$title = "[���� ���� �׷���]";
$theme = "blue"; //red, blue, green �� �ϳ�

bar_graph($data,$width,$height,$x_index,$img,$title,$theme);

echo "</p>";
?>
