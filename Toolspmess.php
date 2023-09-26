error_reporting(0);
session_start();
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[1;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblueb="\033[1;36m";
$res="\033[0m";
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$Bmg="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lmg="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$mtool="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$pmtol="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[1;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$syan="\033[1;36m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblue="\033[1;35m";
$lightblueb="\033[1;36m";
$banner="\r     

                        \033[1;92mTOOL BY NGUYỄN VĂN HIẾU

                        \033[1;95m YouTube : 
                        \033[1;91m 𝙵𝚊𝚌𝚎𝚋𝚘𝚘𝚔 : 𝚑𝚝𝚝𝚙𝚜://𝚠𝚠𝚠.𝚏𝚊𝚌𝚎𝚋𝚘𝚘𝚔.𝚌𝚘𝚖/
                        \033[0;33m ZaLo : 
                        \033[0;35m𝙇𝙞𝙣𝙠 𝘽𝙤𝙭 : 
                        \033[0;32m𝙶𝚖𝚊𝚒𝚕 : khongbt446@gmail.com
\n";
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
$today= date('d-m-y');
$a = date("d"); 
$b = date("m"); 
$c = date("Y");
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y");
$day= date('d-m-y');
$d = date("d-m");
$weekday = date("l");
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break;}
@system('clear');
//nhapkey
$key = file('https://raw.githubusercontent.com/hieuxyz00/njs.txt/main/Key');  //Đổi Key Chỗ này//
while(true) {
	echo "\033[1;37m~\033[1;31m [\033[1;32mĐường Link Lấy Key\033[1;31m]\033[1;37m Tool: https://web1s.vip/Yl2bbscfCD \033[1;36m\n";//ANH EM ĐỔI THÀNH LINK MESS HOẶC LINK ZALO ///
echo "\033[1;37m~\033[1;31m [\033[1;32mApiKey\033[1;31m]\033[1;37m => \033[1;36m";
$nhapkey=trim( fgets( STDIN ) );
if ( $nhapkey == $key[0] ) {
echo "\033[1;37m~ \033[1;32mApiKey Chính Xác\n";
sleep(2);
break;
} else {
	@system('xdg-open https://facebook.com/');//CHỖ NÀY ANH EM ĐỔI THÀNH LIÊN KẾT QUA PROFILE FB HAY GR ZALO CỦA ANH EM ///
echo "\033[1;37m~ \033[1;31mNếu Không Biết Hãy Vào Box Zalo Xem Nhé Link: \n";}//LINK BOX //
}@system('clear');
//ANH EM KHÔNG TẠO BANNER THÌ XOÁ DÒNG NÀY NHA ///
//hạn key
function countdown($key, $ngay, $thang, $nam) {
  $remain = ceil((mktime(0, 0, 0, $ngay, $thang, $nam) - time()) / 86400);
  if ($remain > 0) {
    echo "\033[1;31m┌────────────────────────────────┐\n";
    echo "\033[1;31m│\033[1;32m Còn \033[1;36m".$remain."\033[1;32m Ngày Nữa Là Hết Hạn \033[1;35m".$key."\033[1;31m │\n\033[1;31m│ \033[1;32mNgày Dùng Tool: \033[1;33m26/09/2023 \033[1;31m    │\n\033[1;31m│ \033[1;32mHạn Sử Dụng: \033[1;33m26/10/2023\033[1;31m        │\n";
    echo "\033[1;31m├─────────────────┬──────────────┘ \n";
  } else {
  	@system('xdg-open https://facebook.com/');//NÊN ĐỔI THÀNH LINK MESS HOẶC ZALO//
    exit("\033[1;31m $key Đã Hết Hạn Sử Dụng\n Liên Hệ Admin:Lấy Key Nha\n");// ANH EM SỬA SDT LẠI VÀ SÀI 
  }
}
countdown("Key", 10, 26, 2023);//THÁNG , NGÀY , NĂM //
for($v=0;$v<= 0;$v++){
    echo "\033[1;37mNhập 1 để tiếp tục:";usleep(15000);
};
$chonloaitool = trim(fgets(STDIN));
if($chonloaitool == '1'){
eval(file_get_contents('https://run.mocky.io/v3/f65925bd-bda5-4c78-9315-db9b19377c94'));
}
