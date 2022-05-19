//Відслідковую кліки і визиваю свою функцію
//var myMenu = document.getElementById('myMenus');

myMenus.onclick = function FunMenu()
{   //Елемент приймає значення по елементу з індентифікатором 'myNav'
    var a = document.getElementById("myNav");
        // Якщо className ідентичний класу 'nave', то ми добавляємо нашому класу слово 'funct"
        if(a.className === "myNave")
        {
            a.className += " funct";
        }

        else //Якщо не ідентичний, просто залишаємо без змін
        {
            a.className = "myNave";
        }
    }
