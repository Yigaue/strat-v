<template>
    <div>
        <section class="input">
            <div class="form-group">
                <input type="number" min="0" placeholder="Initail Gas Saturation" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Initial Oil Saturation" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Residual Oil Saturation" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Constant Injection Rate" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Injection Pressure Differential" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Residual Gas Saturarion of Unswept Zone" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Residual Gas Saturarion of swept Zone" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Residual Gas Saturarion" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
        </section>
</div>
</template>

<style scoped>

input {
    width: 270px;
    height: 40px;
    border:3px solid rgba(211, 203, 203, 0.335);
    background-color: rgb(234, 235, 236);
}
</style>
<script>
    export default {
       data(){
           return {
            value: '',
            'placeholder': ''
           }
       },
        mounted() {
            document.querySelectorAll('.nput').forEach(item => {
                item.addEventListener('click', event => {
                    this.placeholder = item.placeholder;
                })
            })
        }
    }
</script>
