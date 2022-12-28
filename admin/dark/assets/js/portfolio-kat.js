
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
// function KateqoriyaStatus(id)
// {
//     $.ajax({
//         url:"../settings/code/port-kat-status.php",
//         data:{ks:true,id:id},
//         method:"POST",
//         success:function (data){
//             if(data){
//                 console.log("true");
//             }
//             else{
//                 console.log("false");
//             }
//         }
//     })
// }

function PageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}