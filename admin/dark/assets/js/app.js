function GetUrl()
{
    let url_text=location.href;
    let url=new URL(url_text);
    let status=url.searchParams.get("status");
    console.log(status);
    if(status=="ok")
    {
        swal({
            title: "Yüklənildi!",
            text: "Okey!",
            icon: "success",
            button:"Əla"
        });
        setTimeout(Clear,3000);
    }
    if(status=="no")
    {
        swal({
            title: "Xəta baş verdi!",
            text: "NO",
            icon: "error",
            button:"Təəssüf"
        });
        setTimeout(Clear,3000);
    }
    function Clear()
    {
        location.href=location.protocol+"//"+location.host+location.pathname;
    }
}
GetUrl();