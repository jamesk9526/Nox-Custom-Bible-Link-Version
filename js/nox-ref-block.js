const { registerBlockType } = wp.blocks;
const { TextControl } = wp.components;
const { createElement } = wp.element;
const { __ } = wp.i18n;

function generateBibleReference(content) {
    if (!content) {
        return createElement(
            'div',
            { className: 'error-message' },
            __('Please enter custom text.', 'nox-custom-bible')
        );
    }

    return createElement(
        'a',
        { href: '#', className: 'bible-reference' },
        content
    );
}

registerBlockType('nox-custom-bible/nox-ref-block', {
    title: __('Nox Reference Block', 'nox-custom-bible'),
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: {
            type: 'string',
            default: __('User\'s Custom Text', 'nox-custom-bible'),
        },
    },
    edit: function(props) {
        const { attributes, setAttributes } = props;

        return createElement(
            'div',
            {},
            createElement(
                TextControl,
                {
                    label: __('Custom Text', 'nox-custom-bible'),
                    value: attributes.content,
                    onChange: (content) => setAttributes({ content }),
                }
            ),
            createElement(
                'div',
                {},
                generateBibleReference(attributes.content)
            )
        );
    },
    save: function({ attributes }) {
        return generateBibleReference(attributes.content);
    },
});
