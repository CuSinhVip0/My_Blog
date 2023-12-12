function handleShowOptionAvt() {
    document.querySelector(".sub_nav").classList.toggle("show")
    document.querySelector(".wrapper_2").classList.toggle("show")
}

function handleBackHome($id) {
    window.location.replace("http://myblog.vn/u/profile/" + $id)
}
function handleUpdate() {
    document.querySelector("#form").submit()
}
