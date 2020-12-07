<form <?php print form_attr($data); ?>>
    <?php foreach ($data['fields'] as $field_id => $field): ?>

        <?php if (isset($field['label'])): ?>
            <label>
            <p><?php print $field['label']; ?></p>
        <?php endif; ?>

        <?php if ($field['type'] == 'select') : ?>
            <select <?php print select_attr($field_id, $field); ?>>

                <?php foreach ($field['options'] as $option_id => $option_title): ?>
                    <option <?php print option_attr($option_id, $field); ?>>
                        <?php print $option_title; ?>
                    </option>
                <?php endforeach; ?>

            </select>
        <?php elseif ($field['type'] == 'textarea') : ?>
            <textarea <?php print textarea_attr($field_id, $field); ?>><?php print $field['value'] ?? ''; ?></textarea>
        <?php else: ?>
            <input <?php print input_attr($field_id, $field); ?>>
        <?php endif; ?>

        <?php if (isset($field['error'])): ?>
            <p><?php print $field['error']; ?></p>
        <?php endif; ?>

        <?php if (isset($field['label'])): ?>
            </label>
        <?php endif; ?>

    <?php endforeach; ?>

    <?php foreach ($data['buttons'] as $button_name => $button): ?>
        <button <?php print button_attr($button_name, $button); ?>>
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>

    <?php if (isset($data['error'])): ?>
        <p><?php print $data['error']; ?></p>
    <?php endif; ?>

</form>