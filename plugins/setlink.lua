local function run(msg, matches)

local group = load_data('bot/group.json')

if matches[1] == 'وضع رابط' and is_owner(msg) or is_momod(msg) and addgroup then

redis:set('link'..msg.chat_id_,matches[2])

tg.sendMessage(msg.chat_id_, 0, 1, '<b>اهلا صديقي تم حفض الرابط بنجاح ✅</b>', 1, 'html')

end

if matches[2] == 'الرابط' and is_owner(msg) or is_momod(msg) then

link1 = redis:get('link'..msg.chat_id_)

tg.sendMessage(msg.chat_id_, 0, 1, '<b>❗️رابط المجموعه❗️ :</b>\n'..link1 , 1, 'html')

end

end


return {

patterns = {

"^(وضع رابط) (.*)$",

"^(الرابط)$"

},

run = run

}
