<template>
    <h2>Hie</h2>

</template>

<script>
export default {
props:[
        'members',
    ],
    mounted(){
        console.log(this.members);
        this.filteredMembers = this.members;

    },
    data(){
        return{
            filteredMembers:[],
            columns:[
                'title',
                'name',
                'gender',
                'national_id',
                'contact',
                'action'
            ],
            options:{
                headings:{
                    'title': 'Title',
                    'name': 'Name',
                    'national_id':'ID #',

                }
            }
        }
    },
    methods:{
        reset(){
            this.filteredMembers = this.members
        }

    }

}
</script>

<style>

</style>
