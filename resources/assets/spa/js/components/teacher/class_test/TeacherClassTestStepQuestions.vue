<template>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>
                    Nova Avaliação de
                    <small>
                        {{classInformationName}}
                    </small>
                </h1>
            </div>
            <div class="well well-sm">
                {{classTest.name}} | {{classTest.date_start}} à {{classTest.date_end}}
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary btn-block" @click="save"
                        :disabled="!classTest.questions.length">Criar avaliação</button>
            </div>
            <br/><br/>
            <div class="col-md-6">
                <teacher-class-test-question-form></teacher-class-test-question-form>
            </div>
            <div class="col-md-6">
                <teacher-class-test-question-list></teacher-class-test-question-list>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    import store from '../../../store/store';
    import classInformationMixin from '../../../mixins/class_information.mixin';

    export default {
        components: {
            'teacher-class-test-question-form': require('./TeacherClassTestQuestionForm.vue'),
            'teacher-class-test-question-list': require('./TeacherClassTestQuestionList.vue'),
        },
        mixins: [classInformationMixin],
        computed: {
            classTest() {
                return this.$deepModel('teacher.classTest.classTest');
            },
        },
        mounted() {
            store.dispatch('teacher/classTeaching/get', this.$route.params.class_teaching);
        },
        methods: {
            save(){
                let classTeachingId = this.$route.params.class_teaching;
                let afterSave = () => {
                    this.$router.push({
                        name: 'class_tests.list',
                        params: {
                            class_teaching: classTeachingId
                        }
                    });
                };
                if ( typeof this.classTest.id =="undefined") {
                    store.dispatch('teacher/classTest/create', classTeachingId)
                        .then(afterSave);

                }else{
                    store.dispatch('teacher/classTest/update', {
                        classTeachingId,
                        classTestId: this.classTest.id
                    })
                        .then(afterSave);
                }
            }
        }
    }
</script>