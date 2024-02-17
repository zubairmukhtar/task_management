<script>
    $(document).ready(function() {
        $('#tasksTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('task.index') }}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'priority',
                    name: 'priority'
                },
                {
                    data: 'due_date',
                    name: 'due_date'
                },
                {
                    data: 'completed',
                    name: 'completed',
                    render: function(data) {
                        return data === 0 ? 'false' : 'true';
                    }
                },
            ]
        });
    });
</script>
