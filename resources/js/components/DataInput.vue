<template>
    <div>
    <section class="data-input">
            <div class="form-group">
                <input type="number" min="0" placeholder= "Height of Bed" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder= "Width of Bed" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder= "Oil viscosity" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Water Viscosity" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Average Posrosity" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Oil Formation volume factor" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Water Formation volume factor" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
            </div>
            <div class="form-group">
                <input type="number" min="0" placeholder="Initial Water Saturation" :value = "value" v-on:input="$emit('typer', $event.target.value, placeholder)" class="nput"/>
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
        data: function () {
            return {
                'placeholder': '',
                value: ''
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
