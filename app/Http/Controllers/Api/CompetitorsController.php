<?php

namespace App\Http\Controllers\Api;

use App\Competitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompetitorsController extends Controller
{
    private $competitor;

    public function __construct(Competitor $competitor)
    {
        $this->competitor = $competitor;
    }

    public function index()
    {
        $data = ['data' => $this->competitor->all()];

        return response()->json($data);
    }

    public function show($id)
    {
        $competitor = $this->competitor->find($id);

        if (!$competitor) {
            return response(['msg' => 'Competidor não encontrado :/'], 404);
        }

        $data = ['data' => $competitor];

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $competitorData = $request->all();

        $this->competitor->create($competitorData);

        return response(['msg' => 'Competidor criado com sucesso!'], 201);
    }

    public function update(Request $request, $id)
    {
        $competitorData = $request->all();

        $competitor = $this->competitor->find($id);

        $competitor->update($competitorData);

        return response(['msg' => 'Competidor atualizado com sucesso!'], 201);
    }

    public function delete(Competitor $id)
    {
        $id->delete();

        return response(['msg' => 'Competidor excluído com sucesso!']);
    }
}
