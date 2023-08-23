<?php
system('clear');

echo "\033[1;92m      
███╗░░░███╗░██████╗░████████╗
████╗░████║██╔═══██╗╚══██╔══╝
██╔████╔██║██║██╗██║░░░██║░░░
██║╚██╔╝██║╚██████╔╝░░░██║░░░
██║░╚═╝░██║░╚═██╔═╝░░░░██║░░░
╚═╝░░░░░╚═╝░░░╚═╝░░░░░░╚═╝░░░\n";

echo "\033[1;96m[1] Cài đặt JDK 17\n";
echo "\033[1;932m[2] Giải nén tệp src.zip từ URL\n";
echo "\033[1;92m[3] Chạy server\n";
echo "\033[1;92mLua chon: \033[1;33m";

$luachon = trim(fgets(STDIN));

if ($luachon == 1) {
    sleep(1);
    system('pkg install openjdk-17 -y -y');
    system('clear');
    sleep(1);
} else if ($luachon == 2) {
    sleep(1);
    system('wget -O src.zip https://www.mediafire.com/file/aqvfeqk61qhutrm/nro1.rar/file && unzip src.zip && clear ');
    system('rm -rf src.zip');
    system('clear');
} else if ($luachon == 3) {
    sleep(1);
    system(' java -server -jar dist/Heroes_Z.jar');
} else {
    echo "\033[1;91mChon Sai Vui Lòng Chọn Lại\n";
    echo "\033[1;93m-------------------------------------------------------------\n";
    sleep(1);
}
?>
