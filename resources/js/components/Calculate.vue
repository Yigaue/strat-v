<template>
    <div class="container">
            <main class="row">
                <section class="data-input col-md-4">
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Length of Bed"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Width of Bed"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Oil viscosity"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Water Viscosity"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Average Posrosity"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Oil Formation volume factor"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Water Formation volume factor"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Initial Water Saturation"/>
                    </div>
                </section>
                <section class="input col-md-4">
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Initail Gas Saturation"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Initial Oil Saturation"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Residual Oil Saturation"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Constan Injection Rate"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Injection Pressure Differential"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Residual Gas Saturarion of Unswept Zone"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Residual Gas Saturarion of swept Zone"/>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" placeholder="Residual Gas Saturarion"/>
                    </div>
                </section>

                <section class="section col-md-2">
                    <div class="screen">
                        <div class="display">
                            <p class="parameter">Relative Permeability of water</p>
                            <p class="value"> <span class="value-arrow">▶︎</span> <span class="ans">845348374837483898954384574574975489758947545</span> </p>
                        </div>
                    </div>
                </section>
            </main>
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
            /* padding: 10px; */
        }
        div.screen {
            background-color: black;
            width: 480px;
            height: 400px;
            /* position: absolute; */
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
        input {
            width: 270px;
            height: 40px;
            border:3px solid rgba(211, 203, 203, 0.335);
            background-color: rgb(234, 235, 236);
        }
        .container {
            margin: 30px !important;
        }
</style>
<script>
    export default {
        mounted() {
        }
    }
</script>
