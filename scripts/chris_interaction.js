var memberlist = document.getElementsByClassName('team-member');

console.log(memberlist);

for(i=0; i < 6 ;i++){
    console.log(memberlist[i]);
    memberlist[i].addEventListener('click', function(){alert('test!')}, false);
}