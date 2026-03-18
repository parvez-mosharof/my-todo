-- PostgreSQL version of your journal table

CREATE TABLE stories (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: sample data
INSERT INTO stories (id, title, content, created_at) VALUES
(5, 'Parvez Mosharof |1st Title', 'I will write my 1st story here and will add a photo about the story.', '2025-05-31 10:00:04'),
(6, 'Parvez Mosharof | 2nd Title', 'I will write my 2nd story here and will add a photo about the story.', '2025-05-31 10:00:45'),
(7, 'Parvez Mosharof | 3rd Title', 'I will write my 3rd story here and will add a photo about the story.', '2025-05-31 10:01:09');