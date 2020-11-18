<template>
    <div class="container">
            <main class="row">
                <div class="col-md-4">
                    <data-input v-on:typer="setInputValue"></data-input>
                </div>
                <div class="col-md-4">
                    <data-input2 v-on:typer="setInputValue"></data-input2>
                </div>
                <div class="col-md-2">
                <section class="section">
                    <div class="screen">
                        <div class="display">
                            <p class="parameter">{{parameter}}</p>
                            <p class="value"> <span class="value-arrow" >▶︎</span> <span class="ans">{{answer}} </span> </p>
                        </div>
                    </div>

                </section>
                        <p style="color: red">{{result}}</p>

                </div>
            </main>
        </div>
</template>

<style scoped>
    .container {
        /* margin: 30px!important; */
        margin: 100px 40px;

    }
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
        position: absolute;
        left:0px;
        color: rgb(180, 18, 6);
    }
    span.ans {
        margin-left: 20px;
        padding: 0 15px;
    }
</style>
<script>
    import DataInput from './DataInput.vue'
    import ScreenDisplay from './ScreenDisplay.vue'
    import DataInput2 from './DataInput2.vue'
    export default {
        data : () => {
            return {
                answer: '',
                parameter: '',
                result: ''
            }
        },
        components: { DataInput, DataInput2, ScreenDisplay },
        methods: {
            setInputValue(payload, parameter) {
                this.answer = payload,
                this.parameter = parameter
            }
        },
        mounted() {
            let calculate = 2 * 2;
            this.result = calculate;
            // console.log(calculate)
        }
    }
</script>
