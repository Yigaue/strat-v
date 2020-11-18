<template>
    <div>
        <!-- Nothing is here for now bro: the content is the calculate comp -->
    </div>
</template>

<style scoped>
    @import url(https://fonts.googleapis.com/css?family=Orbitron);
    p.value {
        color: black;
        letter-spacing: 8px;
        text-align: center;
        font-weight: bolder;
        font-family: Orbitron;
        word-wrap: break-word;
        }

    div.screen {
        background-color: black;
        width: 480px;
        height: 400px;
        left: 60%;
        top: 20%;
        border-radius: 10px;
    }
    .display{
        position: relative;
        border: 1px solid black;
        background-color: rgb(165, 162, 162);
        margin: auto;
        top: 15px;
        width:90%;
        /* font-family: Orbitron; */
        height: 200px;
        margin: auto;
        border-radius: 5px;
        box-shadow: inset 5px 5px 5px 5px rgb(134, 133, 133);
    }

    p.parameter{
        text-align: center;
        font-family:'Courier New', Courier, monospace;
        font-weight: bold;
        font-size: 20px;
        margin-top: 30px;
    }

    .value-arrow {
        position: absolute;;
    }
    span.ans {
        margin-left: 20px;
        padding: 0 15px;
    }
</style>
<script>
    export default {}
</script>
