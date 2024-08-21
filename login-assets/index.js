// const activePage = window.location.pathname;
// const navLinks = document.querySelectorAll('nav a').forEach(link => {
//     if(link.href.includes(`${activePage}`)){
//         link.classList.add('active');
//     }
// })


/*on click Function Links*/

function tenantLogin(){
    window.open("../logins/tenant.php", "_self")
}

function applicantsLogin(){
    window.open("../logins/applicants.php", "_self")
}

function adminLogin(){
    window.open("../logins/admin.php", "_self")
}


function as(src){
    window.location=src;
}