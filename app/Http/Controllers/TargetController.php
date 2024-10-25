<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        $targets = Target::with('technology')->get();
        return view('Target.target', ['targets' => $targets]);
    }

    public function show($id)
    {
        $target = Target::with('technology')->findOrFail($id);
        return view('Target.show', ['target' => $target]);
    }

    public function edit($id)
    {
        $target = Target::with('technology')->findOrFail($id);
        return view('Target.edit', ['target' => $target]);
    }

    public function update(Request $request, $id)
    {
        $target = Target::findOrFail($id);

        // Validate the request
        $validated = $request->validate([
            'url' => 'required|url',
            'domain' => 'required|string',
            'ip_address' => 'required|ip',
            'server_type' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'has_cms' => 'boolean',
            'cms_name' => 'nullable|string',
            'cms_version' => 'nullable|string',
            'technologies' => 'nullable|array',
        ]);

        // Update target
        $target->update([
            'url' => $validated['url'],
            'domain' => $validated['domain'],
            'ip_address' => $validated['ip_address'],
            'server_type' => $validated['server_type'],
            'status' => $validated['status'],
        ]);

        // Update or create technology
        $target->technology()->updateOrCreate(
            ['target_id' => $target->id],
            [
                'has_cms' => $validated['has_cms'] ?? false,
                'cms_name' => $validated['cms_name'],
                'cms_version' => $validated['cms_version'],
                'technologies' => $validated['technologies'] ?? [],
                'updated_by' => auth()->id(),
            ]
        );

        return redirect()->route('targets')->with('success', 'Target updated successfully');
    }

    public function destroy($id)
    {
        $target = Target::findOrFail($id);
        $target->delete();

        return redirect()->route('targets')->with('success', 'Target deleted successfully');
    }
}
