
let word        = 'TheQuickBrownFoxJumpsOverTheLazyDog';
let split_word  = word.split(/(?=[A-Z])/);
let new_word    = [];

for (let count = 0; count < split_word.length; count++) 
{
    (count == 0) ? new_word.push(split_word[count].toUpperCase()) : new_word.push(split_word[count].toLowerCase());
    
}
alert(`New word: ${new_word.join(" ")}`)