
function PortKatDelete(id){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                location.href=PageName()+`?id=${id}&sil=ok`;
            } else {
                swal("Your imaginary file is safe!");
            }
        });
}
function KateqoriyaStatus(id)
{
    let message="";
    $.ajax({
        url:"../settings/code/port-kat-status.php",
        data:{ks:true,id:id},
        method:"POST",
        success:function (data){
            if(data){
                message="<div class='alert alert-info alert-dismissible text-white' role='alert'><span class='text-sm'>Status dəyişdirildi </span><button type='button' class='btn-close text-lg py-3 opacity-10' data-bs-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button></div>";
                console.log(message);
            }
            else{
                console.log("false");
            }
            document.querySelector("#message_kat").innerHTML=message;
        }
    })
}

function Redakte(id,i){
    let td=document.getElementsByClassName("PortfolioKateqoriya")[i].getElementsByTagName("td");
    let title=td[0].textContent;
    document.getElementById("title__").value=title;
    document.getElementById("id__").value=id;
    // console.log(title);
}
function PageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}