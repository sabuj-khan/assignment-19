<ul class="list-inline text-center">
    <li class="list-inline-item">
        <a id="twitter" href="#!">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
    <li class="list-inline-item">
        <a id="facebook" href="#!">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
    <li class="list-inline-item">
        <a id="github" href="#!">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
    <li class="list-inline-item">
        <a id="linkedin" href="#!">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
</ul>


<script>
    
    
    async function getSocialLink(){
        try {
            let url = "/socialData";
            let response = await axios.get(url);

            let mainLink = response.data;

            document.getElementById('facebook').setAttribute('href', mainLink['facebook']);
            document.getElementById('twitter').setAttribute('href', mainLink['twitter']);
            document.getElementById('github').setAttribute('href', mainLink.githube);
            document.getElementById('linkedin').setAttribute('href', mainLink.linkedin);

        } catch (error) {
            alert(error)
        }
    }

    getSocialLink();

    




</script>