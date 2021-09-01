new Vue({
    el: '#app',
    data: {
        display: ['flex'],
        display_s: 'flex',
        flex_direction: ['row', 'row-reverse', 'column', 'column-reverse'],
        flex_direction_s: 'row',
        flex_wrap: ['nowrap', 'wrap', 'wrap-reverse'],
        flex_wrap_s: 'nowrap',
        justify_content: ['flex-start', 'flex-end', 'center', 'space-between', 'space-around', 'space-evenly'],
        justify_content_s: 'flex-start',
        align_items: ['stretch', 'flex-start', 'flex-end', 'center', 'baseline'],
        align_items_s: 'stretch',
        align_content: ['stretch', 'flex-start', 'flex-end', 'center', 'space-between', 'space-around'],
        align_content_s: 'stretch',

        flex_grow: ['0', '1', '2', '3', '4'],
        flex_grow_s: '0',
        flex_shrink: ['0', '1', '2', '3', '4'],
        flex_shrink_s: '0',
        flex_basis: ['auto', '10%', '3rem'],
        flex_basis_s: 'auto',
        align_self: ['auto', 'flex-start', 'flex-end', 'center', 'baseline', 'stretch'],
        align_self_s: 'auto'
    },
})
