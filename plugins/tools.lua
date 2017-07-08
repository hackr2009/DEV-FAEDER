--@lgonl
--@team_faeder
local function run(msg, matches)
if matches[1] == 'ايدي'  then
tg.sendMessage(msg.chat_id, msg.id_, 1, 'ايدي حسابك هو : ['..msg.from_id..']️', 1)
end
if matches[1] == 'احذف' and is_momod(msg) then
   tg.deleteMessages(msg.chat_id_, {[0] = msg.reply_to_message_id_})
end
if matches[1] == 'بوت'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' قبل كلشي 😐✋ ولد لو بنيه اذا ولد امشي اطلع بره زاحف 😐🌚 واذا بنيه مشاعري اكبر من تصف شعوري تجاهج خلاص انسي ممكن ازحفلج 🤦‍♂😹🤷‍♂', 1)
end
if matches[1] == 'المطور'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, '@lgonl @Devphp_lua', 1)
end
if matches[1] == 'السورس'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, 'اهلا بك في سورس DEV_FAEDER', 1)
end
if matches[1] == 'اريد بوت'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' تعال هنا @ll750kll_bot  ', 1)
end
if matches[1] == 'مطور'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' @Devphp_lua  ', 1)
end
if matches[1] == '🌚'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' ﻣنــ﴿💗﴾ـــﯛ൭ر🌸۽♪‏‏ صخام الجدر 😐🌚  ', 1)
end
if matches[1] == '🌝'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' ﻣنــ﴿💗﴾ـــﯛ൭ر🌸۽♪‏‏ حــ͡ــ͒ب͢⁽🙊💗₎♩   ', 1)
end
if matches[1] == 'هلو'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' هــٰٖـٰٖـٖلا ٰٖبـالكـمرۣۙ ⁽💗🌝♩❥  ', 1)
end
if matches[1] == 'فايدر'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' هذا الصنعني فديت ربه😻💋 ', 1)
end
if matches[1] == 'اكلك'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' كول حبي🌝😻  ', 1)
end
if matches[1] == 'بيكو'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' هذا الصنعني فديت ربه😻💋 ', 1)
end
if matches[1] == 'هلاو'  then
   tg.sendMessage(msg.chat_id, msg.id_, 1, ' ﮪٰهٰہٰلاٰواتہ୭ٰ ⁞🐰💛  ', 1)
end
	if matches[1] == 'تثبيت' and is_owner(msg) then
	    tg.pinChannelMessage(msg.chat_id_, msg.reply_to_message_id_, 1)
		tg.sendMessage(msg.chat_id_, 0, 0,  'تم تثبيت الرساله☑️', 0)
	elseif matches[1] == 'الغاء تثبيت' and is_owner(msg) then
	    tg.unpinChannelMessage(msg.chat_id_)
		tg.sendMessage(msg.chat_id_, 0, 0,  ' تم ازالة الرسائل المثبته❌', 0)

			end
end
return {
  patterns = {
    "^(ايدي)$",
     "^(بوت)$",
    "^(تثبيت)$",
    "^(فايدر)$",
    "^(بيكو)$",
    "^(اكلك)$",
    "^(مطور)$",
     "^(هلاو)$",
     "^(🌚)$",
     "^(🌝)$",
    "^(اريد بوت)$",
    "^(هلو)$",
    "^(المطور)$",
    "^(السورس)$",
    "^(احذف)$",
    "^(الغاء تثبيت)$",
     
     
  },
  run = run
}
--@lgonl
--@team_faeder