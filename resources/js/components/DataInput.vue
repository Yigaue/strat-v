<template>
    <!-- <div class="container"> -->
        <!-- <div class="row justify-content-center"> -->
            <div>
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
                        {{-- <label> Residual Oil Saturation</label> --}}
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
        </div>
    <!-- </div> -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
