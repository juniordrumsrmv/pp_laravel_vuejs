<template>
    <form class="form-horizontal" @submit.prevent="addQuestion">
        <div class="form-group">
            <label for="question" class="control-label">Questão</label>
            <texteare id="question" name="question" class="form-control"></texteare>
        </div>
        <div class="form-group">
            <label for="point" class="control-label">Pontos</label>
            <texteare id="point" name="point" class="form-control"></texteare>
        </div>
    </form>
</template>

<script type="text/javascript">
    import store from '../../../store/store';

    export default {
        computed: {

        },
        methods: {

        }
    }
</script>