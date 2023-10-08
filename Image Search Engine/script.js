const accesskey = "6ZtLTAyQHL9vo7zqxL8HSmYZfxdHjXdWsGAAbvRnR9I";
const searchform = document.getElementById("search");
const inputsearch = document.getElementById("inputsearch");
const searchresult = document.getElementById("searchresult");
const showmore = document.getElementById("showmore");

let page = 1;
let keyword = "";

async function searchimages(){
    keyword = inputsearch.value;
    const url = `https://api.unsplash.com/search/photos?page=${page}&query=${keyword}&client_id=${accesskey}&per_page=15`;
    ;

        const response = await fetch(url);
        const data = await response.json();

        const results = data.results;
        results.map((result) => {

            const image = document.createElement("img");
            image.src = result.urls.small;
            const imagelink = document.createElement("a");
            imagelink.href = result.links.html;
            imagelink.target = "_blank";
            imagelink.appendChild(image);
            searchresult.appendChild(imagelink);
        })
        showmore.style.display = "block";


}
searchform.addEventListener("submit" , (e) => {
    e.preventDefault();
    page = 1;
    searchimages();
})

showmore.addEventListener("click" , ()=>{
    page++;
    searchimages();
})

