<?php

namespace aisatu;

use pocketmine\Player;
use pocketmine\Plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\server\ServerCommandEvent;

class aisatu extends PluginBase implements Listener{

	public function onEnable()
	{
		$plugin = "aisatu";
		$this->getLogger()->info(TextFormat::GREEN.$plugin."を読み込みました");
	}

          	


		public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		$player = $sender;
		$playername = $player->getName();
 


               

		switch($command->getName()){
			case "k":
                   $rand = mt_rand(1,10);
                    switch($rand){
						case 1:
							Server::getInstance()->broadcastMessage("<".$playername.">§a|^・ω・)/ ﾊﾛｰ♪");
						break;
						case 2:
							Server::getInstance()->broadcastMessage("<".$playername.">§aｺﾝﾆﾁ波！(　゜o）＜≡≡((((☆ｶﾞｺﾞｰﾝ☆）>o<)ノ ｵｩｰ");
						break;
						case 3:
							Server::getInstance()->broadcastMessage("<".$playername.">§a＝＝((( (/* ^^)/　ﾊﾛｰｰｰ!!");
						break;
						case 4:
							Server::getInstance()->broadcastMessage("<".$playername.">§aｺﾝﾁｬｯ(/∀＼*)ｷｬｯｷｬｯ");
						break;
						case 5:
							Server::getInstance()->broadcastMessage("<".$playername.">§a(｡･ω･)ﾉ こんてぃわー");
						break;
						case 6:
							Server::getInstance()->broadcastMessage("<".$playername.">§a(*´_｀)ﾉ　ﾔﾎﾟｰ♪");
						break;
						case 7:
							Server::getInstance()->broadcastMessage("<".$playername.">§aこん(/・ω・)/にゃちゎ");
						break;
						case 8:
							Server::getInstance()->broadcastMessage("<".$playername.">§a(。･o･｡)ﾉ　こんにちゎぁ♪");
						break;
						case 9:
							Server::getInstance()->broadcastMessage("<".$playername.">§a(*◎Ｕ∀Ｕp)q♪ﾁﾜｧ♪");
						break;
						case 10:
							Server::getInstance()->broadcastMessage("<".$playername.">§a(√･ω･) ちーっす");
					break;
}
			return true;
			break; 

                        case "oti":
		$rand = mt_rand(22,30);
		switch($rand){
                                                case 22:
							Server::getInstance()->broadcastMessage("<".$playername.">§b(@＾皿＾@)ゞ『ォチﾏｽ!!』*｡+ﾟ★");
						break;
						case 23:
							Server::getInstance()->broadcastMessage("<".$playername.">§b(○´∇｀)ﾉ☆ﾟ+.退室ｲﾀｼﾏｽ.+ﾟ☆");
						break;
						case 24:
							Server::getInstance()->broadcastMessage("<".$playername.">§b★ﾟ+o｡(☆´･ω･)σ《ぉちます》a(･ω･｀★)｡o+ﾟ☆");
						break;
						case 25:
							Server::getInstance()->broadcastMessage("<".$playername.">§bp【+ﾟ*退室ｼﾁｬｳｮ:ﾟ+】qД｀｡)｡o.ﾟ｡");
						break;
						case 26:
							Server::getInstance()->broadcastMessage("<".$playername.">§bヾ(´Д｀q･ﾟ･ﾊﾞィﾊﾞィ!　おちるﾈェｯ!!*:ﾟ･☆");
						break;
						case 27:
							Server::getInstance()->broadcastMessage("<".$playername.">§bヾ(★´Å｀★)σ【ｵﾁﾙﾈェ～】｡o+☆");
						break;
						case 28:
							Server::getInstance()->broadcastMessage("<".$playername.">§bヾ(´Д｀q･ﾟ･ﾊﾞィﾊﾞィ!　おちるﾈェｯ!!*:ﾟ･☆");
						break;
						case 29:
							Server::getInstance()->broadcastMessage("<".$playername.">§bｵﾁﾙﾈ～☆εε==≡ヾ(★,,´∀'｀)ﾉ))");
						break;
						case 30:
							Server::getInstance()->broadcastMessage("<".$playername.">§b人･∀･*).o0((ｿﾛｿﾛ☆落ﾁﾏｽ★))");
						break;
						
}

			return true;			
			break;

                        case "otukare":
		$rand = mt_rand(36,45);
			switch($rand){
	                                        case 36:
							Server::getInstance()->broadcastMessage("<".$playername.">§6(≧∇≦) ｵﾂｶﾚｻﾏー♪");
						break;
						case 37:
							Server::getInstance()->broadcastMessage("<".$playername.">§6お疲れ様(*･ω･*)ゞﾃﾞｼ!!");
						break;
						case 38:
							Server::getInstance()->broadcastMessage("<".$playername.">§6ｵﾂｶﾚｰ！Σd(ゝ∀･)");
						break;
						case 39:
							Server::getInstance()->broadcastMessage("<".$playername.">§6ヾ(*´I｀)ﾉ ｡ﾟ･+:.おつかれさま･.:+･ﾟ｡");
						break;
						case 40:
							Server::getInstance()->broadcastMessage("<".$playername.">§6(。っ・Д・)っ 【お疲れさまぁ♪】");
						break;
						case 41:
							Server::getInstance()->broadcastMessage("<".$playername.">§6ヽ(。ゝω・)ノﾎﾟｨｯ⌒【☆:*:･ｵﾂｶﾚｻﾏ･:*ﾟ☆】");
						break;
						case 42:
							Server::getInstance()->broadcastMessage("<".$playername.">§6ｼｭｯ!!(´･ω･｀)ﾉ≡【☆:*:･おつかれさま･:*ﾟ☆】");
						break;
						case 43:
							Server::getInstance()->broadcastMessage("<".$playername.">§6ｵﾂｶﾚｰ　ヾ(=ﾟωﾟ)ゞ");
						break;
						case 44:
							Server::getInstance()->broadcastMessage("<".$playername.">§6おつかれー！(*´Ｉ ｀*)ﾉｼ");
						break;
						case 45:
							Server::getInstance()->broadcastMessage("<".$playername.">§6((*´ゝз･)ﾉﾞお疲れ様♪");
						break;
		}
			return true;
			break;		
	
                     }
}
}
