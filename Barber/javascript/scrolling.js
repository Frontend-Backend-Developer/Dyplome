function onEntry (entr)
{
    entr.forEach(element => {
        if(element.isIntersecting)
        {
            element.target.classList.add('elemShow');
        }
    });
}

let settings = {threshold: [0.5]};

let servers = new IntersectionObserver (onEntry, settings); //він стежить за перетином одного елемента іншим

let elements = document.querySelectorAll ('.eleAnim'); //повертає список елементів у межах документа

for(let i of elements)
{
    servers.observe(i);
}