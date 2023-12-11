class NewsRepository
{
    protected $model;

    public function __construct(NewsModel $model)
    {
        $this->model = $model;
    }

    public function all($limit = 5, $offset = 0)
    {
        return $this->model->getNews($limit, $offset);
    }

    public function find($id)
    {
        return $this->model->getNewsById($id);
    }

    public function create($data)
    {
        return $this->model->createNews($data);
    }

    public function update($id, $data)
    {
        return $this->model->updateNews($id, $data);
    }

    public function delete($id)
    {
        return $this->model->deleteNews($id);
    }
}
