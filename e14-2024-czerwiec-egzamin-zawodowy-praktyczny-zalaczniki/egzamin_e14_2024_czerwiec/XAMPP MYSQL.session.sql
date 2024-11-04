SELECT * FROM zwierzeta AS zw
LEFT JOIN gromady AS gr 
ON zw.id = gr.id WHERE
gr.nazwa = 'ryby';

