SELECT * FROM zwierzeta AS zw
LEFT JOIN gromady AS gr 
ON zw.id = gr.id WHERE
gr.nazwa = 'ryby';

SELECT zw.id, zw.gatunek, gr.nazwa FROM zwierzeta AS zw
INNER JOIN gromady AS gr on zw.id = gr.id;

SELECT * FROM zwierzeta as zw
INNER JOIN gromady as gr on zw.id = gr.id where gr.nazwa = 'ssaki'