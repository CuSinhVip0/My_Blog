async function tym(v) {
    var flag = false
    document.querySelectorAll(`#post_like_${v}`).forEach(async (item) => {
        if (item.children["unlike"].classList.contains("show")) {
            flag = true
            item.children["unlike"].classList.remove("show")
            item.children["like"].classList.remove("show")
            item.children["like"].classList.add("show")
        } else {
            item.children["unlike"].classList.remove("show")
            item.children["like"].classList.remove("show")
            item.children["unlike"].classList.add("show")
        }
    })

    if (flag) {
        await fetch(`http://myblog.vn/home/likepost?id_post=${v}`, {
            method: "GET",
        })
            .then((res) => res.json())
            .then((res) => {
                if (res.messege == "error") {
                    window.location.replace("http://myblog.vn/login")
                }
            })
    } else {
        await fetch(`http://myblog.vn/home/dislikepost?id_post=${v}`, {
            method: "GET",
        })
    }
}
