<div class="locations-edit-form">
	<div class="content-type">
		<h2>Categorize This Story As: <span>(Required)</span></h2>
		<div class="description"><span>Check All That Apply.</span> Select all topics relevant to this story.</div>
		<ul class="news-release-categories">
			<?php foreach ( $general_topics as $name => $label ) : ?>
			<div class="ignite-field tab-field">
<input id="<?php echo esc_html( $name ); ?>_topic_input" type="checkbox" name="_article_topic[]" value="<?php echo esc_html( $label ); ?>" <?php if ( in_array( $name, $topic_values, true ) || in_array( $label, $topic_values, true ) ) :?> checked="checked"<?php endif; ?> />
				<label for="<?php echo esc_html( $name ); ?>_topic_input"><?php echo esc_html( $label ); ?></label>
			</div>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="subject-type">
		<h2>This Story is About: <span>(Required)</span></h2>
		<div class="description"><span>Check All That Apply.</span> Select the primary subject(s) of the story. If the story is about a faculty member then select "Faculty". Please use discretion with the subject areas. Do not select "Facilities & Centers" or
		other subjects unless the story is actually about that subject.</div>
		<ul class="news-release-categories">
			<?php foreach ( $subjects as $name => $label ) : ?>
			<div class="ignite-field tab-field">
<input id="<?php echo esc_html( $name ); ?>_subject_input" type="checkbox" name="_article_subject[]" value="<?php echo esc_html( $label ); ?>" <?php if ( in_array( $name, $subjects_values, true ) || in_array( $label, $subjects_values, true ) ) : ?>checked="checked"<?php endif; ?> />
				<label for="<?php echo esc_html( $name ); ?>_subject_input"><?php echo esc_html( $label ); ?></label>
			</div>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
