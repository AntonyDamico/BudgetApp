INSERT into
  category (name)
values
  ('food'),
  ('transportation'),
  ('phone'),
  ('utilities'),
  ('rent'),
  ('healthcare'),
  ('enterteinment');
insert into
  expense(name, amount, category_id, note, day)
values
  (
    'Yelmo Cines',
    5.75,
    7,
    'Once upon a time in hollywood',
    '21/08/19'
  ),
  ('Lidl', 1.1, 1, 'Apples', '23/08/19');


insert into
  budget_data (income, savings_perc, savings, monthly_flex)
values
  (1450.0, 15, 1450.0*0.15, 0);