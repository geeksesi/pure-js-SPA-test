require("./bootstrap");

const render = (content) => {
    response = new DOMParser().parseFromString(content, "text/html");
    response.querySelectorAll("[data-xhr]").forEach((new_element) => {
        const xhr = new_element.getAttribute("data-xhr");
        document.querySelector(`[data-xhr=${xhr}]`).innerHTML =
            new_element.innerHTML;
    });
};

const handle_rout_changes = (destination_url) => {
    window.axios
        .get(destination_url)
        .then((res) => {
            // console.log(res.data);
            render(res.data);
        })
        .catch((e) => {
            console.log(e);
        });
};

document.querySelectorAll("a").forEach((element) => {
    console.log(element);
    element.onclick = (e) => {
        e.preventDefault();

        handle_rout_changes(element.href);
    };
});
